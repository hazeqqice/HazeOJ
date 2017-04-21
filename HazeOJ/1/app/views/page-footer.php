<?php
	if (!isset($ShowPageFooter)) {
		$ShowPageFooter = true;
	}
?>
			</div>
			<?php if ($ShowPageFooter): ?>
			<div class="uoj-footer">
				<p>
					<a href="<?= HTML::url(UOJContext::requestURI(), array('params' => array('locale' => 'zh-cn'))) ?>"><img src="//img.uoj.ac/utility/flags/24/cn.png" alt="中文" /></a> 
					<a href="<?= HTML::url(UOJContext::requestURI(), array('params' => array('locale' => 'en'))) ?>"><img src="//img.uoj.ac/utility/flags/24/gb.png" alt="English" /></a>
				</p>
				
				<ul class="list-inline">
					<li><?= UOJConfig::$data['profile']['oj-name'] ?></li>
					<?php if (UOJConfig::$data['profile']['ICP-license']!=''): ?>
					 | <li><a href="http://www.miitbeian.gov.cn"><?= UOJConfig::$data['profile']['ICP-license'] ?></a></li>
					<?php endif ?>
				</ul>
				
				<p>Server time: <?= UOJTime::$time_now_str ?> | <a href="https://jq.qq.com/?_wv=1027&k=47hFQxY">加入Haze OJ 用户交流群</a></p>
			</div>
			<?php endif ?>
		</div>
		<!-- /container -->
	</body>
</html>
