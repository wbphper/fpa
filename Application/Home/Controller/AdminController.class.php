<?php
namespace Home\Controller;
use Think\Controller;

class AdminController extends Controller 
{

    public function index()
    {
        $question = M('question')->order('create_time DESC')->select();

        $datas = $this->gongsihuizong($question);

        $resinfo = $this->bmgr($question);
        $this->assign('datas', $datas);
        $this->assign('resinfo', $resinfo);
        $this->display();
    }
    

    private function bmgr($resinfo)
    {
        foreach ($resinfo as $k => $v)
        {
            $resinfo[$k]['type'] = '';
            
            $resinfo[$k]['result'] = $this->results($resinfo[$k]);
            
            if(substr_count($v['type'], 1))
            {
                $resinfo[$k]['type'] .= '<font color="red">红</font>';
            }
            
            if(substr_count($v['type'], 2))
            {
                $resinfo[$k]['type'] .= '<font color="blue">蓝</font>';
            }
            
            if(substr_count($v['type'], 3))
            {
                $resinfo[$k]['type'] .= '<font color="#F8C701">黄</font>';
            }
            
            if(substr_count($v['type'], 4))
            {
                $resinfo[$k]['type'] .= '<font color="green">绿</font>';
            }
        }
        
        return $resinfo;
    }
    
    //汇总统计
    private function gbmhz($department, $question)
    {
        for($k=0;$k<=8 ;$k++)
        {
            $data[$k]['red'] = 0;
            $data[$k]['blue'] = 0;
            $data[$k]['yellow'] = 0;
            $data[$k]['green'] = 0;
            $data[$k]['num'] = 0;
        }
                
        foreach($department as $k => $v)
        {
            foreach($question as $kk => $vv)
            {
                $data[$k]['name'] = $v['name'];
                
                if($v['id'] == $vv['department_id'])
                {
                    $data[$k]['num'] += 1;
                    
                    if(substr_count($vv['type'], 1))
                    {
                        $data[$k]['red'] += 1;
                    }
                    
                    if(substr_count($vv['type'], 2))
                    {
                        $data[$k]['blue'] += 1;
                    }
                    
                    if(substr_count($vv['type'], 3))
                    {
                        $data[$k]['yellow'] += 1;
                    }
                    
                    if(substr_count($vv['type'], 4))
                    {
                        $data[$k]['green'] += 1;
                    }   
                }
            }
        }
        
        return $data;
    }
    
    //公司汇总
    private function gongsihuizong($question)
    {
        $datas = array('num'=>0, 'red'=>0, 'blue'=>0, 'yellow'=>0, 'green'=>0);
        
        foreach($question as $kk => $vv)
        {
            $datas['num'] += 1;

            if(substr_count($vv['type'], 1))
            {
                $datas['red'] += 1;
            }

            if(substr_count($vv['type'], 2))
            {
                $datas['blue'] += 1;
            }

            if(substr_count($vv['type'], 3))
            {
                $datas['yellow'] += 1;
            }

            if(substr_count($vv['type'], 4))
            {
                $datas['green'] += 1;
            }   
        }
        
        return $datas;
    }
    
    //颜色结果
    private function results($res)
    {
        unset($res['id']);
        unset($res['create_time']);
        unset($res['type']);
        unset($res['company']);
        unset($res['user_name']);

        $result = array_values($res);

        $A_qian = 0;
        $B_qian = 0;
        $C_qian = 0;
        $D_qian = 0;
        $A_hou = 0;
        $B_hou = 0;
        $C_hou = 0;
        $D_hou = 0;

        foreach($result as $k => $v)
        {
            if($k <= 14)//前15
            {
                if($v == 1)
                {
                    $A_qian += 1;
                }
                elseif($v == 2)
                {
                    $B_qian += 1;
                }
                elseif($v == 3)
                {
                    $C_qian += 1;
                }
                else
                {
                    $D_qian += 1;
                }
            }
            else//后15
            {
                if($v == 1)
                {
                    $A_hou += 1;
                }
                elseif($v == 2)
                {
                    $B_hou += 1;
                }
                elseif($v == 3)
                {
                    $C_hou += 1;
                }
                else
                {
                    $D_hou += 1;
                }
            }
        }
        
        $red = $A_qian + $D_hou;
        $blue = $B_qian + $C_hou;
        $yellow = $C_qian + $B_hou;
        $green = $D_qian + $A_hou;
        
        $datas = array('red'=>$red, 'blue'=>$blue, 'yellow'=>$yellow, 'green'=>$green);
        $data = array('red'=>$red, 'blue'=>$blue, 'yellow'=>$yellow, 'green'=>$green);
        rsort($data);
        foreach ($data as $k => $v)
        {
            foreach ($datas as $kk => $vv)
            {
                if($vv == $v)
                {
                    $data1[$kk] = $vv;
                }
            }
        }
        
        $data2 = '';
        foreach ($data1 as $k => $v)
        {
            if($k == 'red')
            {
                $data2 .= $v.'<font color="red">红</font> + ';
            }
            
            if($k == 'blue')
            {
                $data2 .= $v.'<font color="blue">蓝</font> + ';
            }
            
            if($k == 'yellow')
            {
                $data2 .= $v.'<font color="#F8C701">黄</font> + ';
            }
            
            if($k == 'green')
            {
                $data2 .= $v.'<font color="green">绿</font> + ';
            }
        }
        $data3 = trim($data2, ' +');
        
        return $data3;
    }
    
    //excel公司汇总
    public function gshzs()
    {
        $question = M('question')->select();
        $user = $this->gongsihuizong($question);
        $user[0] = $user;
        $xlsCell  = array(
            array('red','红色人数'),
            array('blue','蓝色人数'),
            array('yellow','黄色人数'),
            array('green','绿色人数'),
            array('num','参评总人数'),
        );
        header("Content-type:text/html;charset=utf-8");

    	exportExcel('公司汇总_'.date('YmdHis'), $xlsCell, $user);
    }
    
    //excel部门个人
    public function bmgrs()
    {
        $resinfo = M('question')->select();
        
        //部门及个人
        $data = $this->bmgr($resinfo);
        
        foreach($data as $k => $v)
        {
            $user[$k]['user_name'] = $v['user_name'];
            $user[$k]['company'] = $v['company'];
            $user[$k]['result'] = strip_tags($v['result']);
            $user[$k]['type'] = strip_tags($v['type']);
        }
        
        $xlsCell  = array(
            array('user_name','姓名'),
            array('company', '公司名称'),
            array('result','综合性格'),
            array('type','判定性格'),
        );
        header("Content-type:text/html;charset=utf-8");

    	exportExcel('个人统计_'.date('YmdHis'), $xlsCell, $user);
    }
    
    public function deletes()
    {
        $id = I('get.id');
        
        $res = M('question')->where(['id'=>$id])->delete();
        
        if($res)
        {
            $this->success('删除成功');
        }
        else
        {
            $this->success('删除失败');
        }
    }
    
}