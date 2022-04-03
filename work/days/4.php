<?php
$title =  'Klab Server Side Camp(第二回)に参加した話 - ';
include('./../app/_header.php');
?>
<link rel="stylesheet" href=<?php echo $path . "/css/dogma.css"?>>

<main>
    <h1 class="title">Klab Server Side Camp(第二回)に参加した話</h1>
        <br>
        <p class="box2">3/10(木)~3/16(金)の平日五日間</p>
        <p class="box2">KlabさんのKlab Server Side Camp(第二回)に参加してきました！</p>
        <p class="box2"> </p>
        <p class="box2">今回のインターンは僕にとって初めてのインターンだったのでワクワクソワソワしながら臨んだのですが、インターンの雰囲気が全体的にとても良く、多くの新しいことを学べたので、自分が経験したことについて詳しく書きたいと思います！また、インターンではKlabさんが用意した音ゲーのバックエンドを実装しました！</p>
        <p class="box2"> </p>
        <p class="box2"> </p>
        <h2>自己紹介</h2>
        <p class="box2">東北地方の大学で化学を専攻している大学四年生です。化学専攻ですが、研究室ではプログラムを書いて分子シミュレーションをしているため、多少はプログラミングに心得があります。</p>
        <p class="box2"> </p>
        <p class="box2">普段はFortran、c++、bashのプログラムを書いてるんですが、今回のインターンでは、ゴリゴリPythonを使いました。僕のPython経験は統計処理だったり、subprocess.runでbashと組み合わせる程度しか使ったことがありませんでした。</p>
        <p class="box2"> </p>
        <p class="box2">副業で、研究室内のサーバーのスーパーユーザーを任せて頂いているので、MySQLを齧ったことがあったり、趣味でphpを使ってホームページ作ったりしたこともあったので、まったくの初心者というわけではありません。</p>
        <p class="box2"> </p>
        <p class="box2">ちなみにKlabさんのことは一時期スクフェスにドハマりしていたので以前から気になっていました！</p>
        <p> </p>
    <h2>宣伝</h2>
        <blockquote class="twitter-tweet" data-conversation="none" data-lang="ja">
        <p class="box2" dir="ltr" lang="ja">サマーインターン募集開始のお知らせです。<br /><br />サーバサイド特化型インターン「KLab Sever Side Camp(第3回)」<br />■エントリーサイト:<a href="https://t.co/P7AwkqlYGJ">https://t.co/P7AwkqlYGJ</a><br />日程：9/1(木)～7(水) ※平日5日間<br />第1次締切：3/31(木)23:59まで<br /><br />※第1回メンター技術ブログ:<a href="https://t.co/MoSvipD4X8">https://t.co/MoSvipD4X8</a><a href="https://twitter.com/hashtag/KLabServerSideCamp?src=hash&amp;ref_src=twsrc%5Etfw">#KLabServerSideCamp</a></p>
        — klab_tech (@klab_tech) <a href="https://twitter.com/klab_tech/status/1501513135886266371?ref_src=twsrc%5Etfw">2022年3月9日</a>
        </blockquote>
        <p class="box2">
        <script async="" src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </p>
        <p> </p>
    <h2>一日目</h2>
        <p class="box2">初日は、環境構築とMySQLについての講義とMySQLの簡単な実習でした。環境構築といってもCodesspacesを起動するだけで構築っぽいことは何もしてないので、”環境構築苦手だな”みたいな人でも大丈夫です。</p>
        <p> </p>
        <p class="box2">Codespacesは初めて使ったのですが、めちゃくちゃ便利で感動しました。個人での利用は申請が必要らしいので、早速申請しておきました。（時間けっこうかかるみたい）</p>
        <p> </p>
        <p class="box2">MySQLの講義の際に、SQLAlchemy ORMの説明を受けました。ORMという用語自体知らなかったのですが、phpでSQL文書いた時にも使っていたんですね。bashだと文字列結合でSQL文を生成して実行していたのでそこそこ感動が大きかったです。</p>
        <blockquote>
            <p class="box2">
            O/R マッピングとは、一言で言えば、オブジェクト指向プログラミング言語においてリレーショナルデータベースのレコードを通常のオブジェクトとして操作する方法である。
            </p>
        </blockquote>
        <p class="box2"><iframe src="https://hatenablog-parts.com/embed?url=https%3A%2F%2Fqiita.com%2Fts7i%2Fitems%2Fc23e50b5ee29887c446c" title="段階的に理解する O/R マッピング - Qiita" class="embed-card embed-webcard" scrolling="no" frameborder="0" style="display: block; width: 100%; height: 155px; max-width: 500px; margin: 10px 0px;"></iframe><cite class="hatena-citation"><a href="https://qiita.com/ts7i/items/c23e50b5ee29887c446c">qiita.com</a></cite></p>
        <p> </p>
        <p class="box2">初日は特別苦戦することもなく、時間もあまったのでKlabさんから頂いたMySQLの技術書を読んで終えました。</p>
        <p class="box2"><img src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/kumamon0128/20220319/20220319174056.png" width="600" height="300" loading="lazy" title="" itemprop="image"  style="display: block; margin: auto;"/></p>
        <p><br /><br /></p>
    <h2>二日目</h2>
        <p class="box2">二日目から本格的な実装が始まり、PythonとWeb開発初心者の自分には苦戦するところが出始めました。</p>
        <p> </p>
        <p class="box2">午前中の講義でFastAPIとpydanticの軽い説明を受け、APIの実装に入りました。APIの仕様確認とTryを簡単にできるSwagger UIを今回のインターンで使ったのですが、これがメチャクチャ便利で出会った技術の中で一番感動しました。</p>
        <p> </p>
        <p class="box2">マルチプレイのRoom API仕様書を読みながら実装をやり始めました。tableの設計を真面目にしたことがなかったのでここが最初の苦戦ポイントでした。とりあえず、必要そうな情報をtableに入れて作りましたが、後々修正することに。。他にも返り値の型ミスなどありましたが、メンターの方々のヘルプもあり実装の1/4は終わりました。自由度が高いと難しいよね...（<span style="text-decoration: line-through;">一人だけ二日目でほとんど完成してる怪物がいて勝手に焦りを感じていた...</span>）</p>
        <h2>土日</h2>
        <p class="box2">Klabさんから事前に頂いた一週間分のお菓子の消化に力を入れました。どのおやつも好きなやつだったので最高でした！ｲｲﾈ!!　</p>
        <p> </p>
        <p class="box2">実装を進めるか悩みましたが、進度も遅れているわけでは無さそうだったので、Netflixでアニメをみながらゆっくり休んでました。</p>
        <figure class="figure-image figure-image-fotolife mceNonEditable" title="お菓子！">
        <p class="box2"><img src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/kumamon0128/20220322/20220322222951.jpg" width="600" height="300" loading="lazy" title="" itemprop="image"  style="display: block; margin: auto;" /></p>
        <figcaption style="text-align:center">お菓子！</figcaption>
        </figure>
    <h2>三日目</h2>
        <p class="box2">休み明けで遅刻しかけましたが在宅のおかげで間に合いました。起きてから1分後に間に合うのまじ神。それにしてもインターン期間中誰一人遅刻しないのすごかったな。。</p>
        <p> </p>
        <p class="box2">午前中にトランザクションとロックについての講義を受けました。ロックについての話がかなり面白くて、悲観的ロックと楽観的ロックを勉強しました。</p>
        <p> </p>
        <p class="box2">ロックと言ったら悲観的ロックを指すことがおおいみたいで、これは頻繁にデータへ変更が加わるであろうという悲観的な思考のもと更新対象のデータを取得する数に制限を設けることで再現します。</p>
        <p class="box2">楽観的なロックは、同時に変更されることはないだろうという楽観的な（<span style="text-decoration: line-through;">短絡的では？</span>）思考のもと更新してみて人数制限を超えたらロールバックするという処理をします。</p>
        <p> </p>
        <p>この二つはケースバイケースで組み合わせることもあるみたいです。今回のインターンでは活用できるほど余裕はなかったので知識として頭の片隅に置いておきました。</p>
        <p class="box2"><iframe src="https://hatenablog-parts.com/embed?url=https%3A%2F%2Fqiita.com%2FNagaokaKenichi%2Fitems%2F73040df85b7bd4e9ecfc" title="排他制御（楽観ロック・悲観ロック）の基礎　 - Qiita" class="embed-card embed-webcard" scrolling="no" frameborder="0" style="display: block; width: 600px; height: 200px; max-width: 500px; margin: 10px 0px;"></iframe><cite class="hatena-citation"><a href="https://qiita.com/NagaokaKenichi/items/73040df85b7bd4e9ecfc">qiita.com</a></cite></p>
    <h2>四日目</h2>
        <p class="box2">この日は一日中、残りの実装とバグの修正をしてました。間にマルチプレイ会とメンター陣との座談会がありました。自分は実装が間に合っていなくてマルチプレイ会は参加できませんでした。座談会では実際の業務で使われている技術やエンジニアの生の意見が聞けて楽しかったです。この間はラジオ感覚で聞きながら実装をしこしこがんばっていました。</p>
        <p> </p>
        <p class="box2">一通り完成したので、マルチプレイのテストをしてみたらリザルト画面に遷移しなかったり、待機画面でホストが表示されなかったりとバグだらけだったので少し凹みました。直せるところは修正して残りは明日の自分に回しました。</p>
    <h2>五日目</h2>
        <p class="box2">さて、最終日です。夕方から成果発表があったのだけど、くじ運が無くてトップバッターに...　バグも直ってなかったので即効で発表資料を作り、なんとかゲームができるように頑張りました。</p>
        <p> </p>
        <p class="box2">一応完成した画面がこんな感じです。実はまだバグがあるんですけど、プレイは最後までできるのでオッケーです。（HARDのスコアが変なのとホスト表示がバグってますね。。）</p>
        <figure class="figure-image figure-image-fotolife mceNonEditable" title="名前は適当です！">
        <p class="box2"><img src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/kumamon0128/20220320/20220320004908.png" width="600" height="300" loading="lazy" title="" itemprop="image"  style="display: block; margin: auto;"/></p>
        <figcaption style="text-align:center">名前は適当です！</figcaption>
        </figure>
        <p class="box2">発表を終え、メンターからのコメントタイムへ。</p>
        <p class="box2">トランザクション分離レベルを理解していないことがバレてしまい、無駄にcommitしている行を指摘されました。</p>
        <p> </p>
        <pre class="code python"><code>
            conn.execute(
                text(
                    "update `room` set `joined_user_count` = `joined_user_count` + 1 where `room_id`=:room_id"
                ),
                dict(room_id=room_id),
            )
            conn.execute(text("commit"))
            count_check = conn.execute(
                text("select `joined_user_count` from `room` where `room_id`=:room_id"),
                dict(room_id=room_id),
            )
        </code></pre>
        <p class="box2">updateは即反映されるのね。。</p>
        <p class="box2"><iframe src="https://hatenablog-parts.com/embed?url=https%3A%2F%2Fgithub.com%2Fichirin2501%2Fdoc%2Fblob%2Fmaster%2Finnodb.md%23%25E3%2583%2588%25E3%2583%25A9%25E3%2583%25B3%25E3%2582%25B6%25E3%2582%25AF%25E3%2582%25B7%25E3%2583%25A7%25E3%2583%25B3%25E5%2588%2586%25E9%259B%25A2%25E3%2583%25AC%25E3%2583%2599%25E3%2583%25AB" title="doc/innodb.md at master · ichirin2501/doc" class="embed-card embed-webcard" scrolling="no" frameborder="0" style="display: block; width: 100%; height: 155px; max-width: 500px; margin: 10px 0px;"></iframe><cite class="hatena-citation"><a href="https://github.com/ichirin2501/doc/blob/master/innodb.md#%E3%83%88%E3%83%A9%E3%83%B3%E3%82%B6%E3%82%AF%E3%82%B7%E3%83%A7%E3%83%B3%E5%88%86%E9%9B%A2%E3%83%AC%E3%83%99%E3%83%AB">github.com</a></cite></p>
        <p class="box2">Pythonに慣れてないこともバレてしまいもっと勉強しないとなと思いました。</p>
        <p class="box2">コード以外では質問する姿勢を褒められたのでこれからも続けていきたいと思いました。これを読んで参加するか迷ってる人がいたら、初歩的な質問にも丁寧に答えてもらえるから心配とか気にせず参加してみよう！</p>
        <p class="box2"> </p>
        <p class="box2">その後の懇親会ではインターン期間中に送って頂いた日本酒とおつまみセットを食べながら社員さんのお話を聞いて解散しました。</p>
        <p class="box2">ほたて美味しかったです。</p>
        <figure class="figure-image figure-image-fotolife mceNonEditable" title="懇親会の食べ物">
        <p class="box2"><img src="https://cdn-ak.f.st-hatena.com/images/fotolife/k/kumamon0128/20220322/20220322232254.jpg" width="600" height="300" loading="lazy" title="" itemprop="image"  style="display: block; margin: auto;" /></p>
        <figcaption style="text-align:center">懇親会の食べ物</figcaption>
        </figure>
        <p class="box2">最後に、想像以上に手を動かす時間がおおかったのと（半ばハッカソンw）社員の方々や他のインターン生との雑談で知見を深められたので、楽しかったです！</p>
        <p class="box2">Klabさんでは他にもKlabExpertCampというインターンもやっているみたいなので機会があれば参加してみたいなと思ってます！</p>
        <p> </p>
    <!-- <img src="../img/DSC_0471.JPG" width="600" height="300" style="display: block; margin: auto;"> -->
    <!-- <video src="../img/MOV_0478.mp4" width="600" height="300" contrals autoplay loop muted playsinline style="display: block; margin: auto;"></video> -->
    <!-- </p> -->
</main>

<?php
include('./../app/_footer.php');