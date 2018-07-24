<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller 
{
    public function index()
    {
        $this->display();
    }

    public function addinfo()
    {
    	if(IS_POST)
    	{
    		$postinfo = $_POST;
    		$num = count($postinfo);
    		if($num == 32)
    		{
				$postinfo['user_name'] = trim($postinfo['user_name']);
                $postinfo['company']   = trim($postinfo['company']);

				$c = M('question')->where(['company'=>$postinfo['company'], 'user_name'=>$postinfo['user_name']])->find();

				if($c)
				{
					$this->error('请勿重复提交！');
				}
				else
				{
					$other_info = $this->results($postinfo);
                    
					$postinfo['type'] = $other_info['type'];
    				$postinfo['create_time'] = time();

	    			$id = M('question')->add($postinfo);
	    			if($id)
	    			{
	    				if(session('?other_info'))
                        {
                        	session('other_info', null);
                        }
    					session('other_info', $other_info);

                        if(session('?name'))
                        {
                            session('name', null);
                        }
                        session('name', $postinfo['user_name']);

	    				$this->redirect('Index/successes');
	    			}
	    			else
	    			{
	    				$this->error('提交失败！');
	    			}
				}
    		}
    		else
    		{
    			$this->error('请按要求填写完整，谢谢配合！');
    		}
    	}
    }

    public function successes()
    {
    	if(session('other_info'))
    	{
    		$other_info = session('other_info');
            $name = session('name');
    		$type = $this->num_color($other_info['type']);
            $this->assign('name', $name);
            $this->assign('result', $other_info['result']);
    		$this->assign('type', $type);
    		$this->display();
    	}
    	else
    	{
    		$this->redirect(U('Index/index'));
    	}
    }

    private function num_color($str)
    {
    	$num = strlen($str);
    	for ($i=0; $i <$num; $i++) 
    	{ 
    		$color .= $this->num_return_color(substr($str, $i, 1));
    	}
    	return $color;
    }

    //处理
    private function results($res)
    {
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
        $datass['result'] = trim($data2, ' +');
        
        $datass['type'] = $this->result_color($red, $blue, $yellow, $green);

        return $datass;
    }

    //分析颜色结果
    private function result_color($red, $blue, $yellow, $green)
    {
        $array1 = array($red, $blue, $yellow, $green);
        rsort($array1);
        $big = $array1[0];
        
        $array = array('red'=>$red, 'blue'=>$blue, 'yellow'=>$yellow, 'green'=>$green);
        $info = array_keys($array, $big);
        $num = count($info);
        
        for($i=0; $i<$num; $i++)
        {
            $data .= $this->color_return_num($info[$i]);
        }
        
        return $data;
    }
    
    //根据颜色返回数字
    private function color_return_num($color)
    {
        if($color == 'red')
        {
            $data = 1;
        }
        elseif($color == 'blue')
        {
            $data = 2;
        }
        elseif($color == 'yellow')
        {
            $data = 3;
        }
        else
        {
            $data = 4;
        }
        
        return $data;
    }

    //根据颜色返回数字
    private function num_return_color($num)
    {
        if($num == 1)
        {
            $data = '红';
        }
        elseif($num == 2)
        {
            $data = '蓝';
        }
        elseif($num == 3)
        {
            $data = '黄';
        }
        else
        {
            $data = '绿';
        }
        
        return $data;
    }

}