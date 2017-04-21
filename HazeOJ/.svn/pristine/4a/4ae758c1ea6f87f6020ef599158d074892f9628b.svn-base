<?php echoUOJPageHeader(UOJLocale::get('help')) ?>
<article>
	<header>
		<h2 class="page-header">常见问题及其解答</h2>
	</header>
	<section>
		<header>
			<h4>1. 关于HazeOJ的一些基本法</h4>
		</header>
		<p>见 <a href="http://hazeoj.ngrok.cc/blogof/winmt/blog/4">http://hazeoj.ngrok.cc/blogof/winmt/blog/4</a>。 </p>
	</section>
	<section>
		<header>
			<h4>2. 注册后怎么上传头像</h4>
		</header>
		<p>HazeOJ目前不提供头像存储服务。每到一个网站都要上传一个头像挺烦的对不对？HazeOJ支持Gravatar，请使用Gravatar吧！Gravatar是一个全球的头像存储服务，你的头像将会与你的电子邮箱绑定。在各大网站比如各种Wordpress还有各种OJ比如UOJ、Vijos、Contest Hunter上，只要你电子邮箱填对了，那么你的头像也就立即能显示了！</p>
		<p>快使用Gravatar吧！ Gravatar地址：<a href="https://cn.gravatar.com/">https://cn.gravatar.com/</a>。进去后注册个帐号然后与邮箱绑定并上传头像，就ok啦！</p>
	</section>
	<section>
		<header>
			<h4>3. HazeOJ的测评环境</h4>
		</header>
		<p>测评环境是Linux，Ubuntu 17.04，64位系统。</p>
		<p>C++的编译器是 g++ 4.8.4，编译命令：<code>g++ code.cpp -o code -lm -O2 -DONLINE_JUDGE</code>。如果选择C++11会在编译命令后面添加<code>-std=c++11</code>。</p>
		<p>C的编译器是 gcc 4.8.4，编译命令：<code>gcc code.c -o code -lm -O2 -DONLINE_JUDGE</code>。</p>
		<p>Pascal的编译器是 fpc 2.6.2，编译命令：<code>fpc code.pas -O2</code>。</p>
		<p>Java7的JDK版本是 jdk-7u76，编译命令：<code>javac code.java</code>。</p>
		<p>Java8的JDK版本是 jdk-8u31，编译命令：<code>javac code.java</code>。</p>
		<p>Python会先编译为优化过的字节码<samp>.pyo</samp>文件。支持的Python版本分别为Python 2.7和3.4。</p>
	</section>
	<section>
		<header>
			<h4>4. 递归 10<sup>7</sup> 层怎么没爆栈啊</h4>
		</header>
		<p>没错就是这样！除非是特殊情况，HazeOJ测评程序时的栈大小与该题的空间限制是相等的！</p>
	</section>
	<section>
		<header>
			<h4>5. 博客使用指南</h4>
		</header>
		<p>见 <a href="http://hazeoj.ngrok.cc/blogof/winmt/blog/6">http://hazeoj.ngrok.cc/blogof/winmt/blog/6</a>。 </p>
	</section>
	<section>
		<header>
			<h4>6. 交互式类型的题怎么本地测试</h4>
		</header>
		<p>唔……好问题。交互式的题一般给了一个头文件要你include进来，以及一个实现接口的源文件grader。好像大家对多个源文件一起编译还不太熟悉。</p>
		<p>对于C++：<code>g++ -o code grader.cpp code.cpp</code></p>
		<p>对于C语言：<code>gcc -o code grader.c code.c</code></p>
		<p>如果你是悲催的电脑盲，实在不会折腾没关系！你可以把grader的文件内容完整地粘贴到你的code的include语句之后，就可以了！</p>
		<p>什么你是萌萌哒Pascal选手？一般来说都会给个grader，你需要写一个Pascal单元。这个grader会使用你的单元。所以你只需要把源文件取名为单元名 + <code>.pas</code>，然后：</p>
		<p>对于Pascal语言：<code>fpc grader.pas</code></p>
		<p>就可以啦！</p>
	</section>
        <section>
		<header>
			<h4>7. 各种评测状态解释说明</h4>
		</header>
		<ul>
			<li>Accepted，程序通过！！！</li>
			<li>Wrong Answer : 答案不对，仅仅通过样例数据的测试并不一定是正确答案，一定还有你没想到的地方。</li>
                        <li>Runtime Error : 运行时错误，非法的内存访问，数组越界，指针漂移，调用禁用的系统函数。请点击后获得详细输出。</li>
			<li>Time Limit Exceeded : 运行超出时间限制，检查下是否有死循环，或者应该有更快的计算方法。</li>
                        <li>Memory Limit Exceeded : 超出内存限制，数据可能需要压缩，检查内存是否有泄露。</li>
			<li>Output Limit Exceeded : 输出超过限制，你的输出比正确答案长了两倍。</li>
			<li>Dangerous Syscalls : 危险的系统调用，你是不是带了文件，或者违反了基本法？</li>
                        <li>还有Judgement Failed && No Comment 这些不常见的就懒得说了...</li>
		</ul>
	</section>
        <section>
		<header>
			<h4>8. Rating计算公式</h4>
		</header>
		<p><a href="唔，自己看吧！">http://i2.muimg.com/1949/f309cc89b5144583.png</a>。 </p>
	</section>
        <section>
		<header>
			<h4>9. 我在本地/xxxOJ AC了，但HazeOJ却过不了...</h4>
		</header>
		<p>对这类问题，我可以说无可奉告，不过在这里还是简单列一下可能原因。(参考网络)</p>
	        <li>Linux中换行符是'\n'而windows中是'\r\n'（多一个字符），有些数据在windows中生成，而在本OJ评测机Linux环境下评测。这种情况在字符串输入中非常常见。</li>
		<li>评测系统建立在Linux下，可能由于使用了Linux的保留字而出现CE，但在Windows下正常。</li>
		<li>Linux对内存的访问控制更为严格，因此在Windows上可能正常运行的无效指针或数组下标访问越界，在评测系统上无法运行。</li>
                <li>严重的内存泄露的问题很可能会引起系统的保护模块杀死你的进程。因此，凡是使用malloc(或calloc,realloc,new)分配而得的内存空间，请使用free(或delete)完全释放。</li>
                <li>当然数据可能真的有问题。但是如果不止一个人通过了这道题，那最好不要怀疑是数据的锅。反之，可以立即向管理员上报（联系方式见下）！</li>
	</section>
	<section>
		<header>
			<h4>10. 联系方式</h4>
		</header>
		<p>如果你想出题、想办比赛，或者发现了BUG，或者对网站有什么建议，可以通过下面的方式联系我们：</p>
		<ul>
			<li>HazeOJ私信联系winmt,qqice。</li>
			<li>邮件联系793539140@qq.com,rxbjsnj@163.com。</li>
			<li>你也可以进QQ群水水，群号是538034767，Haze OJ用户交流群。</li>
		</ul>
	</section>
</article>

<?php echoUOJPageFooter() ?>