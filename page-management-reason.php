<?php get_header('product'); ?>
<?php get_template_part( 'include/header-management-child' ); ?>
    <main>
    <div class="keyvisual" id="home">
        <div class="title">
        <div class="titlebg">
        診断の論拠
        </div>
        </div>
    </div>
    <div class="contentbody">
    <div class="reason-title">
        心理学に基づくピープルアナリティクス<br>
        一人ひとりの「幸福度」「価値観」にフォーカスした全く新しいサーベイ
    </div>
    <div class="reason-book">
        <img src="<?php pdt_img_dir() ?>/management/book.svg">
    </div>
    <div class="reason-container">
        <div class="reason-subtitle">
            発達心理学・成人発達理論
        </div>
        <div class="reason-text">
            <p>人の成長は、成人以降も継続するとして、そのステップを理論化したのが成人発達理論であり、発達心理学の一分野である。</p>
            <p>私たちは成人発達理論による変遷のメカニズムを用いて、「１人称」（自己のみへの関心）、「２人称」（他者からの評価、他者との関係性を重視）、「３人称」（社会全体や広い視点の中での振る舞いを重視）という区分と「利己」（自身の利益、勝利へのこだわり）、「非利己」（自身の行動や組織への貢献により他者から良い評価を受ける、承認されることを重要視する）、「利他」（他者との違いを受容し、他者貢献を喜びとする）の区分を組み合わせた「意識構造」を定義。</p>
            <p>一人ひとりの大切にしているものや、ものの捉え方、考え方、価値観をつまびらかにするために活用している。</p>
        </div>
    </div>
    <div class="reason-book">
        <img src="<?php pdt_img_dir() ?>/management/book.svg">
    </div>
    <div class="reason-container">
        <div class="reason-subtitle">
        ポジティブ心理学
        </div>
        <div class="reason-text">
            <p>人や社会を繁栄させるような「正」の側面に着目した心理学分野で、一人ひとりがより幸福な生き方をするための研究領域である。</p>
            <p>私たちは心理学者のチクセントミハイによって提唱された「フロー」（没頭・没入している状態）の計測と、古代ギリシャの哲学に由来し、アリストテレスが提唱した幸福の２要素である「ヘドニア 」（感覚的快楽、目の前にある五感で感じることができる幸福）と「ユーダイモニア」（自身のありたい姿やなりたい像に近づき、生きがいを感じることで得る幸福）の計測を行い、「ヘドニア 」「フロー」「ユーダイモニア」のスコアの組み合わせから「総合幸福度＝Well-beingスコア」を算出している。</p>
        </div>
    </div>
    <div class="contentbox_btn">
        <a href="<?= HOME_PATH ?>/management/demo">無料診断に進む</a>
    </div>
    </div>
    </div>
    <?php get_template_part( 'include/contactbtn-management-child' ); ?>
    </main>
    <?php get_template_part( 'include/footer-management' ); ?>
<?php get_footer('product'); ?>