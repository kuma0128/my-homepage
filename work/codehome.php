<?php
$title = 'プログラミング - ';
include('./app/_header.php');
?>
<div id="main">  
  <h1>
    プログラミング関連の備忘録
  </h1>
  <div class="section s_07">

    <div class="accordion_one">
    <div class="accordion_header">ネットワーク<div class="i_box"><i class="one_i"></i></div></div>
    <div class="accordion_inner">
      <div class="accordion_one">
      <div class="accordion_header">rshでの遠隔コマンド実行ができない。<div class="i_box"><i class="one_i"></i></div></div>
      <div class="accordion_inner">
        <div class="accordion_one">
        <div class="accordion_header">
          <p>.rhostsがあるか確認してください。アクセスがrefuseされる場合は以下のコマンドを実行し、rsh.socketがenableかどうかを確認してください。<br>
            systemctl status rsh.socket<br>
            rsh.socketが動いていない場合、以下のコマンドを実行してください。<br>
            systemctl enable rsh.socket<br>
            systemctl start rsh.sockrt
          </p>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>
    <br>
    <div class="accordion_one">
    <div class="accordion_header">データベース<div class="i_box"><i class="one_i"></i></div></div>
    <div class="accordion_inner">
        <div class="accordion_one">
            <div class="accordion_header">tableの構造を知りたい<div class="i_box"><i class="one_i"></i></div></div>
            <div class="accordion_inner">
                <div class="accordion_one">
                <div class="accordion_header">                                                                                         <p>describe [TABLE_NAME];</p>
                </div>
                </div>
            </div>
        </div>
        <div class="accordion_one">
            <div class="accordion_header">columnを追加・削除したい<div class="i_box"><i class="one_i"></i></div></div>
            <div class="accordion_inner">
                <div class="accordion_one">
                <div class="accordion_header">
                  <p> alter table [TABLE_NAME] add [COLUMN_NAME] [data type] [NULL or NOT NULL]<br>  alter table [TABLE_NAME] drop column [COLUMN_NAME] </p>
                </div>
                </div>
            </div>
        </div>
        <div class="accordion_one">
            <div class="accordion_header">最後のレコードから10件だけを取り出したい<div class="i_box"><i class="one_i"></i></div></div>
            <div class="accordion_inner">
                <div class="accordion_one">
                <div class="accordion_header">
                  <p> select * from [TABLE_NAME] order by [COLUMN_NAME] desc limit 10;</p>
                </div>
                </div>
            </div>
        </div>
        <div class="accordion_one">
            <div class="accordion_header">SQL実行結果をファイルに出力したい<div class="i_box"><i class="one_i"></i></div></div>
            <div class="accordion_inner">
                <div class="accordion_one">
                <div class="accordion_header">
                  <p>$ mysql -u root -p -e "select * from [TABLE_NAME]" [DATABASE_NAME] > /tmp/mysql.txt</p>
                </div>
                </div>
            </div>
        </div>

        <div class="accordion_one">
              <div class="accordion_header">抽出項目の改行コードを省きたい<div class="i_box"><i class="one_i"></i></div></div>
              <div class="accordion_inner">
                  <div class="accordion_one">
                  <div class="accordion_header">
                    <p> select replace([column_name], char(13) + char(10), ' ') from [table_name];</p>
                  </div>
                  </div>
              </div>
          </div>
        <div class="accordion_one">
            <div class="accordion_header">文字列検索を行いたい<div class="i_box"><i class="one_i"></i></div></div>
            <div class="accordion_inner">
                <div class="accordion_one">
                <div class="accordion_header">
                  <p> select * from [table_name] where [column_name] like ['message']</p>
                </div>
                </div>
            </div>
        </div>
      </div>

    </div>
    <br>
    <div class="accordion_one">
    <div class="accordion_header">ワンライナー集<div class="i_box"><i class="one_i"></i></div></div>
    <div class="accordion_inner">
        <div class="accordion_one">
            <div class="accordion_header">xragsとパイプの違い<div class="i_box"><i class="one_i"></i></div></div>
            <div class="accordion_inner">
                <div class="accordion_one">
                <div class="accordion_header">
                  <p> xargsは引数を次のコマンドに渡すことができる。<br>
                      xargsが必要かどうかは次のコマンドがstdinを必要としているか否で判断する。
                  </p>
                </div>
                </div>
            </div>
        </div>
        <div class="accordion_one">
            <div class="accordion_header">ヒットした名前のファイルを削除する<div class="i_box"><i class="one_i"></i></div></div>
            <div class="accordion_inner">
                <div class="accordion_one">
                <div class="accordion_header">
                  <p> find . -name "*.log" | xargs rm -fv</p>
                </div>
                </div>
            </div>
        </div>
        <div class="accordion_one">
            <div class="accordion_header">物理メモリを多く使用しているプロセスを抽出<div class="i_box"><i class="one_i"></i></div></div>
            <div class="accordion_inner">
                <div class="accordion_one">
                <div class="accordion_header">
                  <p> ps aux | sort -n -k 6 | tail -n 10</p>
                </div>
                </div>
            </div>
        </div>
        <div class="accordion_one">
            <div class="accordion_header">任意のディレクトリのファイル数をカウント<div class="i_box"><i class="one_i"></i></div></div>
            <div class="accordion_inner">
                <div class="accordion_one">
                <div class="accordion_header">
                  <p> ls -F |grep -v / |wc -l</p>
                </div>
                </div>
            </div>
        </div>
        <div class="accordion_one">
            <div class="accordion_header">ディレクトリサイズが大きい順で表示<div class="i_box"><i class="one_i"></i></div></div>
            <div class="accordion_inner">
                <div class="accordion_one">
                <div class="accordion_header">
                  <p> du -m / --max-depth=3 --exclude="/proc*" | sort -k1 -n -r</p>
                </div>
                </div>
            </div>
        </div>
        <div class="accordion_one">
            <div class="accordion_header">並列化してxargs<div class="i_box"><i class="one_i"></i></div></div>
            <div class="accordion_inner">
                <div class="accordion_one">
                <div class="accordion_header">
                  <p> echo "aaa" "iii" | xargs -r -n 1 -P 2 echo "Output:"</p>
                </div>
                </div>
            </div>
        </div>
        <div class="accordion_one">
            <div class="accordion_header">ストップウォッチ<div class="i_box"><i class="one_i"></i></div></div>
            <div class="accordion_inner">
                <div class="accordion_one">
                <div class="accordion_header">
                  <p> time read</p>
                </div>
                </div>
            </div>
        </div>
        <div class="accordion_one">
            <div class="accordion_header">定期的にプロセス状態を監視<div class="i_box"><i class="one_i"></i></div></div>
            <div class="accordion_inner">
                <div class="accordion_one">
                <div class="accordion_header">
                  <p> while true ; do ps aux | grep httpd ; echo ""; sleep 2 ; done ;</p>
                </div>
                </div>
            </div>
        </div>
        <div class="accordion_one">
            <div class="accordion_header">ユーザ毎のCPU使用率を見る<div class="i_box"><i class="one_i"></i></div></div>
            <div class="accordion_inner">
                <div class="accordion_one">
                <div class="accordion_header">
                  <p> ps aux | awk '{ if(NR>1){p[$1] += $3; n[$1]++ }}END{for(i in p) print p[i], n[i], i}'</p>
                </div>
                </div>
            </div>
        </div>
        <div class="accordion_one">
            <div class="accordion_header">ディスク使用量の推計<div class="i_box"><i class="one_i"></i></div></div>
            <div class="accordion_inner">
                <div class="accordion_one">
                <div class="accordion_header">
                  <p> du -s /usr/* | sort -nr | awk '{print $2}' | xargs du -sh</p>
                </div>
                </div>
            </div>
        </div>
        <div class="accordion_one">
            <div class="accordion_header">ロードアベレージの調査<div class="i_box"><i class="one_i"></i></div></div>
            <div class="accordion_inner">
                <div class="accordion_one">
                <div class="accordion_header">
                  <p> cat /proc/loadavg | awk '{print $1,$2,$3}'</p>
                </div>
                </div>
            </div>
        </div>
        <div class="accordion_one">
            <div class="accordion_header">ずっとマージされていないブランチを調べる<div class="i_box"><i class="one_i"></i></div></div>
            <div class="accordion_inner">
                <div class="accordion_one">
                <div class="accordion_header">
                  <p> $ git branch -r --no-merged | while read branch; do git log -1 --since=$(date -d '1 month ago' +%F) $branch | grep -q . || git -P log -1 --pretty=format:"%cd | %an | $branch%n" --date=short $branch ;done</p>
                </div>
                </div>
            </div>
        </div>
        <div class="accordion_one">
            <div class="accordion_header">天気を取得<div class="i_box"><i class="one_i"></i></div></div>
            <div class="accordion_inner">
                <div class="accordion_one">
                <div class="accordion_header">
                  <p> echo 東京 | tr ' ' \\n | xargs -I@ curl wttr.in/@?format=3</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>

  </div>
</div>                                                                                           

    <script>
        // .s_07 .accordion_one
        $(function(){
        //.accordion_oneの中の.accordion_headerがクリックされたら
        $('.s_07 .accordion_one .accordion_header').click(function(){
            //クリックされた.accordion_oneの中の.accordion_headerに隣接する.accordion_innerが開いたり閉じたりする。
            $(this).next('.accordion_inner').slideToggle();
            $(this).toggleClass("open");
        });     
        }); 
    </script>
</body>
<br>
<br>
<?php
include('./app/_footer.php');
