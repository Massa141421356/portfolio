# portfolio
Massa's portfolio

wordpressの新しい自作テーマを作りました。  

## 自作テーマを制作した理由

もともと英語学習についてのブログを作っていたのですが、無料テーマのままだとサイトの構成が簡素だったため、htmlやcss,Javascriptを学んだことを期に自分で新しいWordPressの自作テーマを作ることにしました。また、きれいなサイトを作ることで自分の作ったコンテンツを見てもらうことが増えて、有料コンテンツの購入につなげることができるかもしれないと感じていました。フロントエンジニア志望だったこともあり制作してみました。

  実際のブログはこちらから⇒[英語学習あれこれ](https://masapon14.com/).※レンタルサーバーを解約したため、閲覧不可となりました。ご了承お願いします。

  ## 本ブログの内容

  僕自身がTOEICで400点台から700点までスコアアップをした経験を元に、勉強法をお伝えするブログとなっています。

  ## 自作テーマを作るにあたっての学習期間

  まず、progateの有料会員プランに入りhtml,css,Javascriptを3週間ほどかけて学びました。それが終わってからはyoutubeで簡単なサイトを作る動画を見ながら自分でも手を動かして真似するということを3つの動画に関して行いました。その次に、今回のWordPressの新しいテーマの元となるhtml,css,Javascriptファイルを作りました。これは4日ほどかかりました。これを自分のブログに取り入れたいと思い、youtubeを見て、ローカル環境をMAMPで整えて自作テーマを作るのに必要なphpファイルを作りました。これらをFFFTPでアップロードして今のサイトになっています。ここまでで2日かかりました。

 ## 自作テーマの機能

  ### 上段部分　
  
  * Javascriptを使って、文字とメニューバーがゆっくりと現われるようにしました。
  * また、自分が作ったnote記事への導線もメニューバーに入れました。
  * 「本サイトについて」の部分はhtmlで該当箇所にスクロールするようにしました。
  * 自分が運用しているXのアカウントに遷移するようにしました。
  * メニューバーにカーソルを当てると文字が緑色になるようにcssで当てました。
  * また、ScrollReveal.jsを用いて英文が左から出てくるようにしました。
  * 背景画像はSeaArt.AIを用いて生成したものです。

  ### 中段部分

  * 簡単な自己紹介を先ほどのScrollReveal.jsで動きをつけました。
  * note記事一覧をおしゃれに紹介したかったので、アイキャッチ画像と題名が1つにまとまったアイテムを作りました。

  ### 下段部分

  * NEW POST部分もScrollReveal.jsで動きをつけました。
  * ここのアイテムはwordpress内の投稿記事に遷移するような作りにしました。
  * フッター部分では免責事項などを書いた固定ページに遷移するようにしました。


  ## 制作において困難だった点

　5点あります。
 
  ### 実際にVScodeでコードを書く時にショートカットキーを知らなくてとても時間がかかった点。
  
  僕が参考にしていた人は色々な所でショートカットキーを使うので、画面を見ながら着いていっているはずなのに、コードが一瞬で変わってしまうので、「今どうやった？」と面食らうことがありました。

  ### タグのかっこの位置を間違えてしまう点。
  
  divタグで囲まないといけないのに、囲んでおらず、「おかしい、動かない」となって時間をけっこう使ってしまったことがありました。

  ### 自分のやりたい動きを実装するのに、どんなコードを使えばいいか分からなかった点
  
  ここは知識が無かったので、色々なサイトを調べたり、chatgptに聞いたり、同じような動きをしているサイトを作る動画を探したりしました。その中で、自分でも取り入れられるものは今回の自作テーマに組み込めたと思います。もちろん、高度過ぎて諦めたものも中にはありました。

  ### 全体像がつかめなかった点
  
  自作テーマを作るときに、何をどこまでやればいいのか分からなかったのでどれくらい時間を掛ければいいか未知数でした。とりあえず、「WordPress 自作テーマ」で調べて出てきた有用そうな動画を見て、手を動かしていくことで全体像をつかんでいった形になります。

  ### WordPress特有の関数をどう組み込めばいいか分からなかった点
  
  htmlサイトにphpを組み込んだりするときに、情報を抽出する関数を使うことがありましたが、今まで使ってきた言語でそのようなものを扱ってきたことが無かったので、見よう見真似で実装することしかできませんでした。

  ## 制作における困難を乗り越えた方法

  とにかく調べて、自分の場合だったらどのように応用できるか考えながら情報を見ていったことだと思います。本当は人に聞いたりして作ったほうが早く作れることは分かっていましたが、自分1人で乗りこえなくてはいけない場面も今後あるかもしれないと思ったので誰の力も借りず制作しました。あとはもう、実際にコードを入力してサイトでどう表示されるかを見てみるというトライ＆エラーを何回もしていたことが困難を乗り越えられた秘訣かもしれないです。

 ## 課題点

 * ローカル環境ではうまくいったのにXSERVERではうまく表示されていない部分があったので、目に見える部分は修正したいです。
 * あとは、WordPressの関数を使って、画像と記事名を自動で抽出してアイテムの中に入れられるようにしたいです。さらにできれば、投稿ページについてもよりきれいな形に整理できるようにしたいと思っております。
 

  
  
  

  
