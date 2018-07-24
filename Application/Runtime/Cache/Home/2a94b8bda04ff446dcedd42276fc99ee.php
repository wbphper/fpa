<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0,user-scalable=no" />
		<meta name="full-screen" content="yes">
		<meta name="HandheldFriendly" content="true">
		<title>性格色彩测试</title>
		<link rel="stylesheet" href="/Public/css/mui.min.css" />
		<link rel="stylesheet" href="/Public/css/demo.css" />
	</head>

	<body style="background:url(/Public/images/bg.jpg)">
		<img src="/Public/images/bg1.jpg" width="100%" alt="" />
		<h3 class="h3">性格色彩测试</h3>
		<div class="center">
		<form action="/index.php/home/index/addinfo" method="post">
			<div class="mui-center" style="background:#fff;padding-bottom: 20px;">
				<ul>
					<li class="list_1 active">
						<h4 class="h4" style="padding-top:20px;">公司名称:</h4>
						<input type="text" class="mui-input-clear" placeholder="请输入您的公司名称" style="width:60%;margin:10px 20%;" name="company"/>
					</li>
					<li class="list_1 active">
						<h4 class="h4" style="padding-top:20px;">姓名:</h4>
						<input type="text" class="mui-input-clear" placeholder="请输入您的真实姓名" style="width:60%;margin:10px 20%;" name="user_name"/>
					</li>
					<li style="border-bottom: 0;" class="active">
						<p class="p">说明:所有问题都没有好坏或对错之分。请选择让你“最自然的”“最真实的”反应,而不是“最好的”“最应该的”。在最符合你的句子前打钩,每组只选一个答案,做完全部题目后,按提示计算。</p>
						<h5 class="h5">1、 关于人生观,我的内心其实是：</h5>
					</li>

					<li class="list_2">
						<div class="mui-input-row mui-radio">
							<input name="title_1" type="radio" value="1">
							<label>A、希望能有各种各样的人生体验,所以想法极其多样化。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_1" type="radio" value="2">
							<label style="font-size:14px">B、在合理的基础上，谨慎确定目标，一旦确定会坚定不移地去做。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_1" type="radio" value="3">
							<label style="font-size:14px">C、更加在乎取得一切有可能的成就。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_1" type="radio" value="4">
							<label style="font-size:14px">D、毫不喜欢风险，喜欢享受稳定或现状。</label>
						</div>
					</li>
					<li>
						<h5 class="h5">2、如果爬山旅游，大多数状况下，在下山回来的路线我最可能：</h5>
						<div class="mui-input-row mui-radio">
							<input name="title_2" type="radio" value="1">
							<label>A、好玩有趣，所以宁愿新路线回巢。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_2" type="radio" value="2">
							<label style="font-size:14px">B、安全稳妥，所以宁愿原路线返回。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_2" type="radio" value="3">
							<label style="font-size:14px">D、方便省心，所以宁愿原路线返回。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_2" type="radio" value="4">
							<label style="font-size:14px">D、毫不喜欢风险，喜欢享受稳定或现状。</label>
						</div>
					</li>
					<li>
						<h5 class="h5">3、 说话时，我更看重：</h5>
						<div class="mui-input-row mui-radio">
							<input name="title_3" type="radio" value="1">
							<label>A、感觉效果。有时可能会略显得夸张。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_3" type="radio" value="2">
							<label style="font-size:14px">B、描述精确。有时可能略过冗长。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_3" type="radio" value="3">
							<label style="font-size:14px">C、达成结果。有时可能过于直接让别人不高兴。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_3" type="radio" value="4">
							<label style="font-size:14px">D、人际感受。有时可能会不愿讲真话。</label>
						</div>
					</li>
					<li>
						<h5 class="h5">4、 在大多数时候，我的内心更想要：</h5>
						<div class="mui-input-row mui-radio">
							<input name="title_4" type="radio" value="1">
							<label>A、刺激。经常冒出新点子，想做就做，喜欢与众不同。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_4" type="radio" value="2">
							<label style="font-size:14px">B、安全。头脑冷静，不易冲动。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_4" type="radio" value="3">
							<label style="font-size:14px">C、挑战。生命中竞赛随处可见，有强烈的“赢”的欲望。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_4" type="radio" value="4">
							<label style="font-size:14px">D、稳定。满足自己所拥有的，很少羡慕别人。</label>
						</div>
					</li>
					<li>
						<h5 class="h5">5、 我认为自己在情感上的基本特点是：</h5>
						<div class="mui-input-row mui-radio">
							<input name="title_5" type="radio" value="1">
							<label>A、情绪多变，经常波动。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_5" type="radio" value="2">
							<label style="font-size:14px">B、外表自我抑制强，但内心感情起伏大，一旦挫伤难以平复。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_5" type="radio" value="3">
							<label style="font-size:14px">C、感情不拖泥带水，只是一旦不稳定，容易发怒。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_5" type="radio" value="4">
							<label style="font-size:14px">D、天性情绪四平八稳。</label>
						</div>
					</li>
					<li>
						<h5 class="h5">6、 我认为自己除了工作外，在控制欲上面，我：</h5>
						<div class="mui-input-row mui-radio">
							<input name="title_6" type="radio" value="1">
							<label>A、没有控制欲，只有感染带动他人的欲望，但自控能力不算强。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_6" type="radio" value="2">
							<label style="font-size:14px">B、用规则来保持我对自己的控制和对他人的要求。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_6" type="radio" value="3">
							<label style="font-size:14px">C、内心是有控制欲和希望别人服从我的。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_6" type="radio" value="4">
							<label style="font-size:14px">D、没兴趣影响别人，也不愿别人来控制我。</label>
						</div>
					</li>
					<li>
						<h5 class="h5">7、 当与情人交往时，我最希望对方：</h5>
						<div class="mui-input-row mui-radio">
							<input name="title_7" type="radio" value="1">
							<label>A、经常赞美我，让我享受开心、被关怀且又有一定自由。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_7" type="radio" value="2">
							<label style="font-size:14px">B、可随时默契到我内心所想，对我的需求极其敏感。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_7" type="radio" value="3">
							<label style="font-size:14px">C、得到对方的认可，我是正确的并且我对其是有价值的。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_7" type="radio" value="4">
							<label style="font-size:14px">D、尊重并且相处静谧的。</label>
						</div>
					</li>
					<li>
						<h5 class="h5">8、 在人际交往时，我：</h5>
						<div class="mui-input-row mui-radio">
							<input name="title_8" type="radio" value="1">
							<label>A、本质上还是认为与人交往比长时间独处是有乐趣的。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_8" type="radio" value="2">
							<label style="font-size:14px">B、非常审慎缓慢地进入，常会被人认为容易有距离感。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_8" type="radio" value="3">
							<label style="font-size:14px">C、希望在人际关系中占据主导地位。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_8" type="radio" value="4">
							<label style="font-size:14px">D、顺其自然，不温不火，相对被动。</label>
						</div>
					</li>
					<li>
						<h5 class="h5">9. 我做事情，经常：</h5>
						<div class="mui-input-row mui-radio">
							<input name="title_9" type="radio" value="1">
							<label>A、缺少长性，不喜欢长期做相同无变化的事情。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_9" type="radio" value="2">
							<label style="font-size:14px">B、缺少果断，期待最好的结果但总能先看到事情的不利面。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_9" type="radio" value="3">
							<label style="font-size:14px">C、缺少耐性，有时行事过于草率。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_9" type="radio" value="4">
							<label style="font-size:14px">D、缺少紧迫，行动迟缓，难下决心。</label>
						</div>
					</li>
					<li>
						<h5 class="h5">10、 通常我完成任务的方式是：</h5>
						<div class="mui-input-row mui-radio">
							<input name="title_10" type="radio" value="1">
							<label>A、常赶在最后期限前完成，是临时抱佛脚的高手。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_10" type="radio" value="2">
							<label style="font-size:14px">B、自己有严格规定的程序，精确地做，不要麻烦别人。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_10" type="radio" value="3">
							<label style="font-size:14px">C、先做，快速做。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_10" type="radio" value="4">
							<label style="font-size:14px">D、使用传统的方法按部就班，需要时从他人处得到帮忙。</label>
						</div>
					</li>
					<li>
						<h5 class="h5">11、 如果有人深深惹恼我时，我：</h5>
						<div class="mui-input-row mui-radio">
							<input name="title_11" type="radio" value="1">
							<label>A、内心感到受伤，认为没有原谅的可能，可最终很多时候还是会原谅对方。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_11" type="radio" value="2">
							<label style="font-size:14px">B、深深感到愤怒，如此之深怎可忘记？我会牢记，同时未来完全避开那个家伙。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_11" type="radio" value="3">
							<label style="font-size:14px">C、会火冒三丈，并且内心期望有机会狠狠地回应。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_11" type="radio" value="4">
							<label style="font-size:14px">D、避免摊牌，因为还不到那个地步或者自己再去找新朋友。</label>
						</div>
					</li>
					<li>
						<h5 class="h5">12、 在人际关系中，我最在意的是：</h5>
						<div class="mui-input-row mui-radio">
							<input name="title_12" type="radio" value="1">
							<label>A、得到他人的赞美和欢迎。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_12" type="radio" value="2">
							<label style="font-size:14px">B、得到他人的理解和欣赏。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_12" type="radio" value="3">
							<label style="font-size:14px">C、得到他人的感激和尊敬。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_12" type="radio" value="4">
							<label style="font-size:14px">D、得到他人的尊重和接纳。</label>
						</div>
					</li>
					<li>
						<h5 class="h5">13、在工作上，我表现出来更多的是：</h5>
						<div class="mui-input-row mui-radio">
							<input name="title_13" type="radio" value="1">
							<label>A、充满热忱，有很多想法且很有灵性。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_13" type="radio" value="2">
							<label style="font-size:14px">B、心思细腻，完美精确，而且为人可靠。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_13" type="radio" value="3">
							<label style="font-size:14px">C、坚强而直截了当，而且有推动力。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_13" type="radio" value="4">
							<label style="font-size:14px">D、有耐心，适应性强而且善于协调。</label>
						</div>
					</li>
					<li>
						<h5 class="h5">14、 我过往的老师最有可能对我的评价是：</h5>
						<div class="mui-input-row mui-radio">
							<input name="title_14" type="radio" value="1">
							<label>A、情绪起伏大，善于表达和抒发情感。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_14" type="radio" value="2">
							<label style="font-size:14px">B、严格保护自己的私密，有时会显得孤独或是不合群。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_14" type="radio" value="3">
							<label style="font-size:14px">C、动作敏捷又独立，并且喜欢自己做事情。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_14" type="radio" value="4">
							<label style="font-size:14px">D、看起来安稳轻松，反应度偏低，比较温和。</label>
						</div>
					</li>
					<li>
						<h5 class="h5">15、 朋友对我的评价最有可能的是：</h5>
						<div class="mui-input-row mui-radio">
							<input name="title_15" type="radio" value="1">
							<label>A、喜欢对朋友述说，也有感染别人的力量。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_15" type="radio" value="2">
							<label style="font-size:14px">B、能够提出很多周全的问题，而且需要许多精细的解说。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_15" type="radio" value="3">
							<label style="font-size:14px">C、愿意直言想法，有时会直率而犀利地谈论不喜欢的人、事、物。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_15" type="radio" value="4">
							<label style="font-size:14px">D、通常与他人一起是倾听者。</label>
						</div>
					</li>
					<li>
						<h5 class="h5">16、 在帮助他人的问题上，我内心的想法是：</h5>
						<div class="mui-input-row mui-radio">
							<input name="title_16" type="radio" value="1">
							<label>A、别人来找我，不太会拒绝，会尽力帮他。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_16" type="radio" value="2">
							<label style="font-size:14px">B、值得帮助的人应该帮助。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_16" type="radio" value="3">
							<label style="font-size:14px">C、很少承诺要帮，但我若承诺必兑现。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_16" type="radio" value="4">
							<label style="font-size:14px">D、虽无英雄打虎胆，常有自告奋勇心。</label>
						</div>
					</li>
					<li>
						<h5 class="h5">17、 面对他人对自己的赞美，我内心：</h5>
						<div class="mui-input-row mui-radio">
							<input name="title_17" type="radio" value="1">
							<label>A、没有也无所谓，特别欣喜那也不至于。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_17" type="radio" value="2">
							<label style="font-size:14px">B、我不需无关痛痒的赞美，宁可对方欣赏我的能力。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_17" type="radio" value="3">
							<label style="font-size:14px">C、思考对方的真实性或立即回避众人的关注。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_17" type="radio" value="4">
							<label style="font-size:14px">D、赞美多多益善，总是令人愉悦的。</label>
						</div>
					</li>
					<li>
						<h5 class="h5">18、 面对生活，我更像：</h5>
						<div class="mui-input-row mui-radio">
							<input name="title_18" type="radio" value="1">
							<label>A、随和派－外面的世界我无关，我觉得自己这样还不错。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_18" type="radio" value="2">
							<label style="font-size:14px">B、行动派－我不进步，别人就会进步，所以我必须不停地前进。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_18" type="radio" value="3">
							<label style="font-size:14px">C、分析派－在问题未发生之前，就该想好所有的可能。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_18" type="radio" value="4">
							<label style="font-size:14px">D、无忧派－每天的生活开心快乐最重要。</label>
						</div>
					</li>
					<li>
						<h5 class="h5">19、 对于规则，我内心的态度是：</h5>
						<div class="mui-input-row mui-radio">
							<input name="title_19" type="radio" value="1">
							<label>A、不愿违反规则，但可能因为松散而无法达到规则的要求。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_19" type="radio" value="2">
							<label style="font-size:14px">B、打破规则，希望由自己来制定规则而不是遵守规则。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_19" type="radio" value="3">
							<label style="font-size:14px">C、严格遵守规则，并且竭尽全力做到规则内的最好。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_19" type="radio" value="4">
							<label style="font-size:14px">D、不喜被规则束缚，不按规则出牌会觉得新鲜有趣。</label>
						</div>
					</li>
					<li>
						<h5 class="h5">20、 我认为自己在行为上的基本特点是：</h5>
						<div class="mui-input-row mui-radio">
							<input name="title_20" type="radio" value="1">
							<label>A、慢条斯理，办事按部就班，能与周围的人协调一致。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_20" type="radio" value="2">
							<label style="font-size:14px">B、目标明确，集中精力为实现目标而努力，善于抓住核心要点。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_20" type="radio" value="3">
							<label style="font-size:14px">C、慎重小心，为做好预防及善后，会不惜一切而尽心操劳。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_20" type="radio" value="4">
							<label style="font-size:14px">D、丰富跃动，不喜欢制度和约束，倾向于快速反应。</label>
						</div>
					</li>
					<li>
						<h5 class="h5">21、 当我做错事时，我倾向于：</h5>
						<div class="mui-input-row mui-radio">
							<input name="title_21" type="radio" value="1">
							<label>A、害怕但表面不露声色丄。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_21" type="radio" value="2">
							<label style="font-size:14px">B、不承认而且辩驳，但内心其实已经明白。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_21" type="radio" value="3">
							<label style="font-size:14px">C、愧疚和痛苦，容易停留在自我压抑中。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_21" type="radio" value="4">
							<label style="font-size:14px">D、难为情，希望逃避别人的批评。</label>
						</div>
					</li>
					<li>
						<h5 class="h5">22、 当结束一段刻骨铭心的感情时，我会：</h5>
						<div class="mui-input-row mui-radio">
							<input name="title_22" type="radio" value="1">
							<label>A、很难受，可日子总要过，时间会冲淡一切的。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_22" type="radio" value="2">
							<label style="font-size:14px">B、虽然觉得受伤，但一旦下定决心，就会努力把过去的影子摔掉。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_22" type="radio" value="3">
							<label style="font-size:14px">C、深陷在悲伤的情绪中，在相当长的时期里难以自拔，也不愿再接受新的人。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_22" type="radio" value="4">
							<label style="font-size:14px">D、痛不欲生，需要找朋友倾诉或者找到渠道发泄，寻求化解之道。</label>
						</div>
					</li>
					<li>
						<h5 class="h5">23、 面对他人的倾诉，我回顾自己大多时候本能上倾向于：</h5>
						<div class="mui-input-row mui-radio">
							<input name="title_23" type="radio" value="1">
							<label>A、能够认同并理解对方当时的感受。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_23" type="radio" value="2">
							<label style="font-size:14px">B、快速做出一些定论或判断。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_23" type="radio" value="3">
							<label style="font-size:14px">C、给予一些分析或推理，帮助对方理顺思路。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_23" type="radio" value="4">
							<label style="font-size:14px">D、可能会随着他的情绪起伏而起伏，也会发表一些评论或意见。</label>
						</div>
					</li>
					<li>
						<h5 class="h5">24、 我在以下哪个群体中交流较感满足？</h5>
						<div class="mui-input-row mui-radio">
							<input name="title_24" type="radio" value="1">
							<label>A、舒服轻松的氛围中，心平气和地最终达成一致结论。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_24" type="radio" value="2">
							<label style="font-size:14px">B、彼此展开充分激烈的辩论并有收获。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_24" type="radio" value="3">
							<label style="font-size:14px">C、有意义地详细讨论事情的好坏和影响。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_24" type="radio" value="4">
							<label style="font-size:14px">D、很开心并且随意无拘束地闲谈。</label>
						</div>
					</li>
					<li>
						<h5 class="h5">25、 在内心的真实想法里，我觉得工作：</h5>
						<div class="mui-input-row mui-radio">
							<input name="title_25" type="radio" value="1">
							<label>A、不必有太大压力，可以让我做我熟悉的工作就很不错。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_25" type="radio" value="2">
							<label style="font-size:14px">B、应该以最快的速度完成，且争取去完成更多的任务。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_25" type="radio" value="3">
							<label style="font-size:14px">C、要么不做，要做就做到最好。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_25" type="radio" value="4">
							<label style="font-size:14px">D、如果能将好玩融合其中那就太棒了，不过如果不喜欢的工作实在没劲。</label>
						</div>
					</li>
					<li>
						<h5 class="h5">26、 如果我是领导，我内心更希望在部属心目中，我是：</h5>
						<div class="mui-input-row mui-radio">
							<input name="title_26" type="radio" value="1">
							<label>A、可以亲近的和善于为他们着想的。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_26" type="radio" value="2">
							<label style="font-size:14px">B、有很强的能力和富有领导力的。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_26" type="radio" value="3">
							<label style="font-size:14px">C、公平公正且足以信赖的。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_26" type="radio" value="4">
							<label style="font-size:14px">D、被他们喜欢并且觉得富有感召力的。</label>
						</div>
					</li>
					<li>
						<h5 class="h5">27、 我对认同的需求是：</h5>
						<div class="mui-input-row mui-radio">
							<input name="title_27" type="radio" value="1">
							<label>A、无论别人是否认同，生活都是要继续的。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_27" type="radio" value="2">
							<label style="font-size:14px">B、精英群体的认同最重要。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_27" type="radio" value="3">
							<label style="font-size:14px">C、只要我在乎的那些人认同我就足够了。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_27" type="radio" value="4">
							<label style="font-size:14px">D、所见之人无论贵贱都对我认同那有多好。</label>
						</div>
					</li>
					<li>
						<h5 class="h5">28、 当我还是个孩子的时候，我：</h5>
						<div class="mui-input-row mui-radio">
							<input name="title_28" type="radio" value="1">
							<label>A、不太会积极尝试新事物，通常比较喜欢旧有的和熟悉的。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_28" type="radio" value="2">
							<label style="font-size:14px">B、是孩子王，大家经常听我的决定。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_28" type="radio" value="3">
							<label style="font-size:14px">C、害羞见生人，有意识地回避。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_28" type="radio" value="4">
							<label style="font-size:14px">D、调皮可爱，乐观而又热心。</label>
						</div>
					</li>
					<li>
						<h5 class="h5">29、 如果我是父母，我也许是：</h5>
						<div class="mui-input-row mui-radio">
							<input name="title_29" type="radio" value="1">
							<label>A、容易说服或者宽容的。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_29" type="radio" value="2">
							<label style="font-size:14px">B、比较严厉、性急及说一不二的。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_29" type="radio" value="3">
							<label style="font-size:14px">C、坚持自己的想法和比较挑剔的。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_29" type="radio" value="4">
							<label style="font-size:14px">D、积极参与到子女中一起玩，被小朋友们们热烈欢迎的。</label>
						</div>
					</li>
					<li class="a">
						<h5 class="h5">30、以下有四组格言，哪组里整体上最符合我的感觉?</h5>
						<div class="mui-input-row mui-radio">
							<input name="title_30" type="radio" value="1">
							<label style="font-size:14px;line-height:20px;">A、最深刻的真理是最简单和最平凡的。要在人世间取得成功必须大智若愚。好脾气是一个人在社交中所能穿着的最佳服饰。知足是人生在世最大的幸福。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_30" type="radio" value="2">
							<label style="font-size:14px line-height:20px;">B、走自己的路，让人家去说吧。虽然世界充满了苦难，但是苦难总是能战胜的。有所成就是人生唯一的真正的乐趣。对我而言解决一个问题和享受一个假期一样好。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_30" type="radio" value="3">
							<label style="font-size:14px line-height:20px;">C、一个不注意小事情的人，永远不会成功大事业。理性是灵魂中最高贵的因素。切忌浮夸铺张。与其说得过分，不如说得不全。谨慎比大胆要有力量得多。</label>
						</div>
						<div class="mui-input-row mui-radio">
							<input name="title_30" type="radio" value="4">
							<label style="font-size:14px line-height:20px;">D、幸福在于对生命的喜悦和激情。任何时候都要最真实地对待你自己，这比什么都重要。使生活变成幻想，再把幻想化为现实。幸福不在于拥有金钱，而在于获得成就时的喜悦以及产生创造力的激情。
</label>
						</div>
					</li>
				</ul>
				
					<button type="submit" class="mui-btn mui-btn-success" id="btn" style="margin:30px auto 15px auto;display: block;width:100px;" >提交</button>
				</form>
				
			</div>
		</div>
	</body>
	<script src="/Public/js/jquery.js"></script>
	<script>
			$(document).ready(function(){
				$('form').submit(function(){
					if($('input[type="text"]').val() === '') {
				alert('请输入名字！')
				return false;
			}
			var myReg = /^[\u4e00-\u9fa5]+$/;
			if(myReg.test($("input[type=text]").val())) {
				return true;
			} else {
				alert("请输入正确的名字！");
				return false;
		};
				})
			})
		function check() {
			
		};

	</script>

</html>