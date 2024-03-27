<?php get_header('product'); ?>
<?php get_template_part( 'include/header-1on1-child' ); ?>
    <main>
    <div class="keyvisual" id="home">
        <div class="title">
        <div class="titlebg">
        1on1の課題
        </div>
        </div>
    </div>
    <div class="contentbody">
        <div class="sectiontitle">
            1on1を取り巻く環境
        </div>
        <div class="colorbg">
            <div class="problem-research">
                <div class="research-item">
                    <div class="research-title">
                        Q：1on1実施時に部下への遠慮で伝えるべきことを伝えられないことがあるか？
                    </div>
                    <img src="<?php pdt_img_dir() ?>/1on1/research01.png">
                </div>
                <div class="research-item">
                    <div class="research-title">
                        Q：上司が自分の価値感に合わせてマネジメントしてくれていないと感じるか？
                    </div>
                    <img src="<?php pdt_img_dir() ?>/1on1/research02.png">
                </div>
            </div>
            <p class="research-note">※1.アスマーク社による会員向けアンケート調査による結果<span>※2.N=400、2021/4/15～4/16調査</span></p>
            <div class="research-analysis">
                部下への忖度で伝えるべきことを伝えられない管理職が<b>70％を超える</b>一方、部下は上司に自身の価値観を理解されていないと<b>60％以上</b>が回答している。<br>
                <b>すれ違いが加速し、コミュニケーションや相互理解がままならない</b>状態となっている。
            </div>
		</div>
        <div class="sectiontitle">
            多くの組織がハマっている落とし穴
        </div>
        <div class="problem-trap">
            <div class="problem-trap-pic">
                <img src="<?php pdt_img_dir() ?>/1on1/kadai01.png">
            </div>
            <div class="problem-trap-text">
                <p><span>01</span>固定化されるパワーバランス</p>
                <table class="problem-table">
                    <tbody>
                      <tr>
                        <th class="left-cell">上司</th>
                        <td class="right-cell">上位職</td>
                        <td class="right-cell">評価者</td>
                        <td class="right-cell">指導する</td>
                      </tr>
                      </tbody>
                  </table>
                <table class="problem-table">
                    <tbody>
                      <tr>
                        <th class="left-cell">部下</th>
                        <td class="right-cell">下位職</td>
                        <td class="right-cell">被評価者</td>
                        <td class="right-cell">指導される</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="problem-trap-detail">
                    <span>評価者</span>である上司に、<span>[1on1]における改善</span>を指摘<span>しない</span><br>
                    <span>転職のハードルが下がった</span>昨今、合わないと思ったら簡単に<span>会社を辞めてしまう</span>
                  </div>
            </div>
        </div>
        <div class="problem-trap">
            <div class="problem-trap-pic">
                <img src="<?php pdt_img_dir() ?>/1on1/kadai02.png">
            </div>
            <div class="problem-trap-text">
                <p><span>02</span>部下の発する「言葉」を鵜呑みにする上司</p>
                <div class="problem-trap-title">部下の気持ちの例</div>
                <div class="problem-trap-explanation">
                    肯定しておかないと、話の理解できない無能な社員だと思われる<br>
                    上司の発言に疑問を呈するとそのあとの対応で冷遇される<br>
                    何を言っても理解してくれないので、「はい」と言ってこの場をやり過ごそう<br>
                    反対意見を言うと激昂されて、対処が面倒だ
                </div>
            </div>
        </div>
        <div class="problem-trap-detail">
            <span>上司の言うことが腹落ちしなくても<br>
            納得していなくても、部下は「肯定」の言葉を発する</span><br><br>
            <span>否定されることがない</span>上司は<span>バイアス</span>がかかり続ける<br>
            <span>改善されない[1on1]に</span>部下は<span>心を閉ざし、</span>すれ違いの溝は<span>埋まるどころか拡大</span>
          </div>
		<div class="contentbox_btn">
			<a href="<?= HOME_PATH ?>/1on1/reason">選ばれる理由を見る</a>
		</div>
     </div>

    <?php get_template_part( 'include/contactbtn-1on1-child' ); ?>
    </main>
    <?php get_template_part( 'include/footer-1on1' ); ?>
<?php get_footer('product'); ?>