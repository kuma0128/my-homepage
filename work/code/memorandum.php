<?php
$title = '備忘録 - ';
include('./../app/_header.php');
?>
<div id="main">
  <h1>
    プログラミング関連の備忘録
  </h1>
  <div class="section s_07">

    <div class="accordion_one">
      <div class="accordion_header">ネットワーク<div class="i_box"><i class="one_i"></i></div>
      </div>
      <div class="accordion_inner">
        <div class="accordion_one">
          <div class="accordion_header">rshでの遠隔コマンド実行ができない。(uptime)<div class="i_box"><i class="one_i"></i></div>
          </div>
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
        <div class="accordion_one">
          <div class="accordion_header">TCPポート枯渇について<div class="i_box"><i class="one_i"></i></div>
          </div>
          <div class="accordion_inner">
            <div class="accordion_one">
              <div class="accordion_header">
                <p>ロードアベレージとかディスクIOばかりに気を取られていると、ネットワーク関係で思わぬドツボにハマることがある。TCPポートの枯渇がその一つで対処法を説明する。<br>
                  /proc/sys/net/ipv4/ip_local_port_rangeにはローカルポートとして利用できるアドレスの範囲が書いてある。CentOSのデフォルト値だと32768~60999、つまり28232個のポートが使用可能となっている。使用中のポート数を確認するためには以下のコマンドで確認する。
                </p>
                <pre><code class=prettyprint>
                netstat |grep tcp|wc -l
                </code></pre>
                <p>
                  使用ポート数を上回っている場合、使用ポート数を増やすか、TCPコネクションの保有時間を短くすること(デフォルト値は60秒)で対処できる。/etc/sysctl.conf に次のように追記すること。
                </p>
                <pre><code class=prettyprint>
                net.ipv4.ip_local_port_range = 32768 65000

                net.ipv4.tcp_fin_timeout = 10
                </code></pre>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion_one">
          <div class="accordion_header">NFSが起動しない<div class="i_box"><i class="one_i"></i></div>
          </div>
          <div class="accordion_inner">
            <div class="accordion_one">
              <div class="accordion_header">
                <p>
                  以下のようなエラーが出た時の対処法を説明する。
                </p>
                <pre><code class=prettyprint>
                rpc.mountd[2022]: Could not bind socket:

                (98) Address already in use
                </code></pre>
                <p>
                  これはrpc.mountdというNFSマウントデーモンが使いたいポートが無くて困っているよというエラーで、古いプロセスをkillするかデーモン自体を再起動することで対処することができる。
                  古いプロセスは以下のコマンドで確認できる。
                </p>
                <pre><code class=prettyprint>
                /usr/sbin/lsof -i
                </code></pre>
                <p>
                  次にデーモンの再起動をすれば解決である。
                </p>
                <pre><code class=prettyprint>
                systemctl restart rpcbind
                
                systemctl restart nfs-server
                </code></pre>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="accordion_one">
      <div class="accordion_header">データベース<div class="i_box"><i class="one_i"></i></div>
      </div>
      <div class="accordion_inner">
        <div class="accordion_one">
          <div class="accordion_header">tableの構造を知りたい<div class="i_box"><i class="one_i"></i></div>
          </div>
          <div class="accordion_inner">
            <div class="accordion_one">
              <div class="accordion_header">
                <p>describe [TABLE_NAME];</p>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion_one">
          <div class="accordion_header">columnを追加・削除したい<div class="i_box"><i class="one_i"></i></div>
          </div>
          <div class="accordion_inner">
            <div class="accordion_one">
              <div class="accordion_header">
                <p> alter table [TABLE_NAME] add [COLUMN_NAME] [data type] [NULL or NOT NULL]<br> alter table [TABLE_NAME] drop column [COLUMN_NAME] </p>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion_one">
          <div class="accordion_header">最後のレコードから10件だけを取り出したい<div class="i_box"><i class="one_i"></i></div>
          </div>
          <div class="accordion_inner">
            <div class="accordion_one">
              <div class="accordion_header">
                <p> select * from [TABLE_NAME] order by [COLUMN_NAME] desc limit 10;</p>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion_one">
          <div class="accordion_header">SQL実行結果をファイルに出力したい<div class="i_box"><i class="one_i"></i></div>
          </div>
          <div class="accordion_inner">
            <div class="accordion_one">
              <div class="accordion_header">
                <p>$ mysql -u root -p -e "select * from [TABLE_NAME]" [DATABASE_NAME] > /tmp/mysql.txt</p>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion_one">
          <div class="accordion_header">抽出項目の改行コードを省きたい<div class="i_box"><i class="one_i"></i></div>
          </div>
          <div class="accordion_inner">
            <div class="accordion_one">
              <div class="accordion_header">
                <p> select replace([column_name], char(13) + char(10), ' ') from [table_name];</p>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion_one">
          <div class="accordion_header">文字列検索を行いたい<div class="i_box"><i class="one_i"></i></div>
          </div>
          <div class="accordion_inner">
            <div class="accordion_one">
              <div class="accordion_header">
                <p> select * from [table_name] where [column_name] like ['message']</p>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion_one">
          <div class="accordion_header">カラムの追加位置を選択する<div class="i_box"><i class="one_i"></i></div>
          </div>
          <div class="accordion_inner">
            <div class="accordion_one">
              <div class="accordion_header">
                <p>Bの下にAを挿入したい<br>
                </p>
                <p> alter table [table_name] add A [type] after B;</p>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion_one">
          <div class="accordion_header">カラムの順番を変更する<div class="i_box"><i class="one_i"></i></div>
          </div>
          <div class="accordion_inner">
            <div class="accordion_one">
              <div class="accordion_header">
                <p>Bの下にAを持ってきたい<br></p>
                <p> alter table [table_name] modify A text after B;</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <br>
    <div class="accordion_one">
      <div class="accordion_header">bash&git<div class="i_box"><i class="one_i"></i></div>
      </div>
      <div class="accordion_inner">
        <div class="accordion_one">
          <div class="accordion_header">xragsとパイプの違い<div class="i_box"><i class="one_i"></i></div>
          </div>
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
          <div class="accordion_header">ヒットした名前のファイルを削除する<div class="i_box"><i class="one_i"></i></div>
          </div>
          <div class="accordion_inner">
            <div class="accordion_one">
              <div class="accordion_header">
                <p> find . -name "*.log" | xargs rm -fv</p>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion_one">
          <div class="accordion_header">物理メモリを多く使用しているプロセスを抽出<div class="i_box"><i class="one_i"></i></div>
          </div>
          <div class="accordion_inner">
            <div class="accordion_one">
              <div class="accordion_header">
                <p> ps aux | sort -n -k 6 | tail -n 10</p>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion_one">
          <div class="accordion_header">任意のディレクトリのファイル数をカウント<div class="i_box"><i class="one_i"></i></div>
          </div>
          <div class="accordion_inner">
            <div class="accordion_one">
              <div class="accordion_header">
                <p> ls -F |grep -v / |wc -l</p>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion_one">
          <div class="accordion_header">ディレクトリサイズが大きい順で表示<div class="i_box"><i class="one_i"></i></div>
          </div>
          <div class="accordion_inner">
            <div class="accordion_one">
              <div class="accordion_header">
                <p> du -m / --max-depth=3 --exclude="/proc*" | sort -k1 -n -r</p>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion_one">
          <div class="accordion_header">並列化してxargs<div class="i_box"><i class="one_i"></i></div>
          </div>
          <div class="accordion_inner">
            <div class="accordion_one">
              <div class="accordion_header">
                <p> echo "aaa" "iii" | xargs -r -n 1 -P 2 echo "Output:"</p>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion_one">
          <div class="accordion_header">ストップウォッチ<div class="i_box"><i class="one_i"></i></div>
          </div>
          <div class="accordion_inner">
            <div class="accordion_one">
              <div class="accordion_header">
                <p> time read</p>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion_one">
          <div class="accordion_header">定期的にプロセス状態を監視<div class="i_box"><i class="one_i"></i></div>
          </div>
          <div class="accordion_inner">
            <div class="accordion_one">
              <div class="accordion_header">
                <p> while true ; do ps aux | grep httpd ; echo ""; sleep 2 ; done ;</p>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion_one">
          <div class="accordion_header">ユーザ毎のCPU使用率を見る<div class="i_box"><i class="one_i"></i></div>
          </div>
          <div class="accordion_inner">
            <div class="accordion_one">
              <div class="accordion_header">
                <p> ps aux | awk '{ if(NR>1){p[$1] += $3; n[$1]++ }}END{for(i in p) print p[i], n[i], i}'</p>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion_one">
          <div class="accordion_header">ディスク使用量の推計<div class="i_box"><i class="one_i"></i></div>
          </div>
          <div class="accordion_inner">
            <div class="accordion_one">
              <div class="accordion_header">
                <p> du -s /usr/* | sort -nr | awk '{print $2}' | xargs du -sh</p>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion_one">
          <div class="accordion_header">ロードアベレージの調査<div class="i_box"><i class="one_i"></i></div>
          </div>
          <div class="accordion_inner">
            <div class="accordion_one">
              <div class="accordion_header">
                <p> cat /proc/loadavg | awk '{print $1,$2,$3}'</p>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion_one">
          <div class="accordion_header">ずっとマージされていないブランチを調べる<div class="i_box"><i class="one_i"></i></div>
          </div>
          <div class="accordion_inner">
            <div class="accordion_one">
              <div class="accordion_header">
                <p> $ git branch -r --no-merged | while read branch; do git log -1 --since=$(date -d '1 month ago' +%F) $branch | grep -q . || git -P log -1 --pretty=format:"%cd | %an | $branch%n" --date=short $branch ;done</p>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion_one">
          <div class="accordion_header">天気を取得<div class="i_box"><i class="one_i"></i></div>
          </div>
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
  $(function() {
    //.accordion_oneの中の.accordion_headerがクリックされたら
    $('.s_07 .accordion_one .accordion_header').click(function() {
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
include('./../app/_footer.php');
