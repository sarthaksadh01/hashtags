<?php

//require_once "twitteroauth/autoload.php";
//use Abraham\TwitterOAuth\TwitterOAuth;
//
// define('CONSUMER_KEY', 'aE8wdzK9KIWmKUaOLEw2PPjTY');
// define('CONSUMER_SECRET', 'eNY3pMVuHYDpuiKFBdQUuEuNGQ9RQJh5C0WPKxl1h4YPuPtxDT');
// define('ACCESS_TOKEN', '411513648-fRKE3FtujgsFxNcUVrshxHdr8YXWtjYrzhiaHnNR');
// define('ACCESS_TOKEN_SECRET', 'wlENSzdw0JMWjPSdeNzjKFi1RDVm2CAH70dAzYgDz3t3N');
//
////define('CONSUMER_KEY', '0XkHJqqcVPlMdwRusMIJtOsKm');
////define('CONSUMER_SECRET', 'w5hI49LAGABPcwtf4LxYHIdgB7BgDeE0qHkbnRPVYPGP8IsM7R');
////define('ACCESS_TOKEN', '902436734494883840-0oxDhUsDKl6YSBrpkWK7UAZKVv4FlXB');
////define('ACCESS_TOKEN_SECRET', 'FncrfVC0pZ56vi0uMq2v5pTs7zl7SjdxdDpNalGHhOpnz');
//
//
//        $conn = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
//        $query = array(
//                       "q" => "#iphone",
//                       "count" => 300,
//
//                       );
//        $t = '[';
//        $tweets = $conn->get('search/tweets', $query);
//
//        $c = 0;
//        foreach ($tweets->statuses as $tweet) {
//            $c++;
//            $t=$t.'"'.$tweet->text.'",';
//
//        }
//        $t=$t.'"what is your name"]';
//    echo $t;
//
$t = "";
if(isset($_GET['tweet'])){
   if($_GET['tweet']=='#iphone'){
        $t ='["RT @WSJJapan: iPhone史上最高のコスパ、「XR」こそ本命 XSよりバッテリーの持ちが良く、カラフルで魅力的なデザイン　 #iPhone #アップル #Apple https://t.co/NQovbsQ3g7","他社から #お乗換え 条件ゆるめ #一括◯円 ドコモショップ調布 0120517608 #MNP #iphonexr #iphonexs #iphonex #iPhone6s #iPhone #Xperia #Galaxy9… https://t.co/vNm3RNRxbS","#１０月 #iPhone #MNP #２７日限定 対象機種：#iPhone8 64GB 対象：#MNP 価格：#一括○円　 条件：#MNP #ドコモ #au #Softbank #のりかえ #番号そのまま #限定１台… https://t.co/EAlxsqvqty","MNP 追加2台 話題の新スマホも追加！ #HW01K #一括 #大特価 詳しくは電話にてお問い合わせください。 0354801761 #蒲田 #大田区 #JR蒲田ドコモ #乗り換え #MNP #iPhone #au #softbank #一括特価 #特価","#iPhoneX 64g #スペースグレー お探しの方いませんか？！ #乗り換え 限定でラスト1台 在庫あります！！ 本日なら特別価格 #一括0円 #mnp #Apple #iPhone #高崎 #群馬","#１０月 #２７日だけ #１台限定 #iPhone 対象機種：#iPhoneX 64GB 対象：#MNP 価格：#一括15000円　(税抜) 条件：#MNP 端末購入サポート有 特典：あり #ドコモ #au #Softbank… https://t.co/QjXigxs8Ie","Get your Luxury Magnetic Phone Case For Apple iPhone XS MAX Leather Flip Cover Black Colour Promotion!!! RM40💴 wit… https://t.co/zAS8Nj7YbH","#台数限定 本日限り残り2台 #iPhoneXR 64GB #iPhoneXS 64GB #大特価 ドコモショップおおたかの森店 0120-593-360 #限定 #おおたかの森 #特価 #特別価格 #月サポ #XS #XR #iPhone #流山 #台数限定 #期間限定","＃オシャレ　スマホケース屋さん 沢山UPします ＃見てください https://t.co/8k59bCttOf ＃拡散　＃RT　＃拡散希望 ＃フォロー　＃iPhone ＃ソフトバンク　＃ケース　＃相互 ＃スマホ","RT @UlakCases: Save 20% with promo code 20JEPLNG on Red iPhone 6S Case! Buy Now: https://t.co/kgDgMxPB0P Hard PC back cover+ soft silicone…","RT @UlakCases: Check out our latest blog: The iPhone XR Has Finally Arrived! Read NOW https://t.co/AgCYpRNtHW The iPhone XR does all the sa…","💟auショップイオンタウン水戸南💟 🎊ドコモ、ソフトバンク、格安スマホご利用中の皆様必見！！ ☆★本体を購入される前に当店でお見積りさせて下さい！！★☆8 ご来店お待ちしております😊 #キャンペーン #au #iPhone… https://t.co/c2SzJkBJEW","💟auショップイオンタウン水戸南💟 🎊ドコモ、ソフトバンク、格安スマホご利用中の皆様必見！！ ☆★本体を購入される前に当店でお見積りさせて下さい！！★☆7 ご来店お待ちしております😊 #キャンペーン #au #iPhone… https://t.co/BGmRQSOSTh","ロック画面やホーム待ち受け画像の「揺れ」が気になる場合は次の操作で無効にして改善する事ができます「設定→一般→アクセシビリティ→視差効果を減らすをON」お試しあれ！ ##iPhone修理 #iPhone","１０月台数限定🉐 Androidも大特価❗ 対象機種：#SO01K #SO02K #SC01K #MZ01K #F04J 価格：#一括○円　 条件： #MNP #ドコモ #au #SB #郡山 #のりかえ #うねめ通り #iPhone #Android #番号そのまま #安い","auひかりなら安くて速い光回線が使えます！ 更にスマートバリューで家族みんながお得！＆レンタル料０円Wi-Fiで快適！ 今なら工事費０円！お申込み殺到中です！#au #docomo #SoftBank #iPhone #auひかり","Watch what happened at 10:54 in @saltycuress broadcast: Update on yesterday’s mess + new #iPhone? + #Periscope exc… https://t.co/dt75joBbhl","#１０月 #iPhone #MNP #２７日限定 対象機種：#iPhone8 64GB 対象：#MNP 価格：#一括○円　 条件：#MNP #ドコモ #au #Softbank #のりかえ #番号そのまま #限定１台… https://t.co/cc1gIIj8L9","携帯、タブレット買取ます！ iPhone・iPad・iPod高価買取中！！ 液晶割れや画面が写らない等、壊れている状態でも買取ます！ どんどんシータ志木店までお持ち下さい 査定は無料です！！ #iPhone #iPad #買取","RT @DJNelly03: #love #musicproduction #music #musicians #marketing #musicmarketing #reggae #dancehall #soundcloud #edm #house #musicpromoti…","RT @lyricchord_314: フォンケースがCHOCOLATEみたいに変身。NutsのようなEmblemが美味しそうに浮かんでいるよ。VALENTINEの贈り物にもできます。チョコレートを耳にあてSWEETな話がしたくな～る！互いに贈り合うのもイイネ！ ◆https:…","Which Phone is better, #iPhone 6 to 7 or a #Samsung Galaxy S8?","＊10月31日まで＊ 【#iPhone #下取り プログラム】 iPhoneをご利用の方必見！今なら最大で63,720円もお得になっちゃいます( ^ω^ )　機変・乗り換えをお考えの方は今がチャンス！　詳しくは→https://t.co/l8AwfbIqMB #au #石川","こんにちは、スマホ修理工房マルイシティ横浜店です。 大ニュース！現在、期間限定割引実施中！ 修理代金が店頭価格から３０００円引きで、とてもお得です。 この機会にぜひ、スマホの不調を直してしまいましょう！ ＃横浜　＃iPhone　＃android　＃修理","#１０月 #２７日だけ #１台限定 #iPhone 対象機種：#iPhoneX 64GB 対象：#MNP 価格：#一括15000円　(税抜) 条件：#MNP 端末購入サポート有 特典：あり #ドコモ #au #Softbank… https://t.co/GiKM10LMkY","10/27 【開始】 #MNP 条件 2台以上購入 #L01K #v30 #一括 #限定 #先着 4台 #月サポ 有 月々 ¥3,483 #ドコモ #乗換 #au  #SB #LG #激安 #埼玉 #docomo… https://t.co/WH4sOpic4U","意外と知らないiPhoneの機能。https://t.co/BJWJCOZIaz #iphone #iphonejp","Try UQ だぞっ #UQmobile お試しサービスが店頭で申込可能に😉 #UQ の通信品質をご自身のスマホで15日間 #無料 お試し😆 #SIMロック解除 もお手伝いします✌️ #WiMAX #iPhone #MNP… https://t.co/uPAEuMOTnE","iPhone4用アクセサリーleaflick! https://t.co/lTlBr1VbuR #PR #senden #mobile #iphone","#１０月 #２７日だけ #１台限定 #iPhone 対象機種：#iPhoneX 64GB 対象：#MNP 価格：#一括15000円　(税抜) 条件：#MNP 端末購入サポート有 特典：あり #ドコモ #au #Softbank #番号そのまま #かなりお得 #残りわずか","【 #Softbank 】 　 ■ #MNP ( #YM からOK) ■ #iPhoneX 64G→本体代12240円+2万円還元 ■ 準定額、ギガモン+、SBOP、下取り(Android)、無コン、複数台、おうち割 詳し… https://t.co/KOnhRBpL5A","💟auショップ行徳💟 🎊ドコモ、ソフトバンク、格安スマホご利用中の皆様必見！！ ☆★本体を購入される前に当店でお見積りさせて下さい！！★☆11 ご来店お待ちしております😊 #キャンペーン #au #iPhone #一括0円… https://t.co/TvUzTE3DJg","💟auショップ行徳💟 🎊ドコモ、ソフトバンク、格安スマホご利用中の皆様必見！！ ☆★本体を購入される前に当店でお見積りさせて下さい！！★☆10 ご来店お待ちしております😊 #キャンペーン #au #iPhone #一括0円… https://t.co/HP8YtQLDwK","RT @DJNelly03: #love #musicproduction #music #musicians #marketing #musicmarketing #reggae #dancehall #soundcloud #edm #house #musicpromoti…","RT @0nly4tae: XR ไม่มีความน่าซื่อสุดๆ หน้าจอ LCD หากอารมณ์คนที่ใช้ i7 อยู่แล้วมามองหน้าจอของ XR ความละเอียดจอ i7ดูไม่มีความต่างเท่าไหร่ ที่…","“他社からのお乗換え解約金負担します”は当たり前!! 大・大・大・大還元中（//▽//） ※詳しくはauショップ宮古まで ＃au　＃docomo　＃softbank　＃MNP　＃iPhone　＃Android","曲刀の舞Lv1 敵モンスターに斬属性のダメージを与える 砂漠ギツネ(R) #ドラゴンポーカー #ドラポ #ID掲示板　#アプリ #Android #iPhone #攻略","脱獄端末格安販売行っています！！！！ これ一個であなたも業者に！！ 是非業界No.1の実績＆品質の夜桜に！！！ #脱獄端末 #モンストチート販売 #オーブ垢 #iPhone https://t.co/vpUZLyLKqn","😊【#au】😊 25〜28日 #限定 #ガラポン #キャンペーン #値下 #MNP #galaxy #s9 #SCV38 #分割 8,640円 #購入サポート なし→60,000円 #還元 あり→75,000円 還元 月々1,… https://t.co/qgrcMnqJ92","#１０月 #iPhone #MNP #２７日限定 対象機種：#iPhone8 64GB 対象：#MNP 価格：#一括○円　 条件：#MNP #ドコモ #au #Softbank #のりかえ #番号そのまま #限定１台 #大好評","#スマホステーション は #Xperia #Galaxy #Arrows #AQUOS #iPhone #Android の #スマホ修理 幅広く対応中！ 他のスマホ修理のお店で断られた製品も、是非スマホステーションにご相談ください、対応機種に自信有ります！","【緊急】10/27・28 ★話題のｉ⑧が一括●円!★ 08007000047 ※先着9名迄 #MNP #予約 #家族割 #iPhone #家族複数 #スマートバリュー #docomo #softbank #au #イベント #愛知 #一宮","#iPhone の修理を依頼する時に #個人情報 を記載しないといけないけど大丈夫かなあ。。 #スマートドクタープロ大阪心斎橋店 は非常に厳しく個人情報を管理しております。 プライバシーマークを取得しており安心して修理をご依頼頂け… https://t.co/3rmIswxzYL","#ドコモショップ草加バイパス店 #店長にないしょ #限定　 #MNP新規 #iphoneXｓ　 #64GB #一括 ６万円！ 条件→お問い合わせください！ ０１２０−１３９−３６０ ０４８−９４６−１０３１ 担当　安井まで #埼玉 #草加 #ドコモ #iPhone #台数","Writing Box with Design of Six Poets iPhone case https://t.co/xX6MJ4gn2D Etsy #iPhone #iphone7 #iphone6 #accessories #etsyshop #etsy","#Polygon #Wall Pack for #Mobile created by JFL #homescreen #android #ios #iphonex #iphone #pixel2xl #samsung… https://t.co/F1XZWfCU8N","#iPhone #修理 #バッテリー #本厚木 充電が出来ない、減りが早い、充電が残っているのにいきなり電源が落ちてしまうなど、充電の問題をバッテリー交換で解決！ データはそのままなので安心してください。 【バッテリー交換価格】　5000円〜","今Wi-Fiルーターが大人気！auひかりが繋げないエリア外の人でもスマートバリューを受けられて料金がお得になるかも！当店で相談・質問受付中です！ #au #docomo #SoftBank #iPhone #スマートバリュー","auひかりなら安くて速い光回線が使えます！ 更にスマートバリューで家族みんながお得！＆レンタル料０円Wi-Fiで快適！ 今なら工事費０円！お申込み殺到中です！#au #docomo #SoftBank #iPhone #auひかり","当店ではiPadの修理も承っております🛠️ お気軽にご相談くださいませ💁‍♀️ #城陽 #宇治 #宇治田原 #京田辺 #iPhone #iPad #修理 #画面割れ #バッテリー交換","★当店限定イベント★ #他社からのかえ 期間 10/26～31迄 #iPhoneX　×2台 #一括＠円 在庫限りの為前日予約必須 条件:MNP/購入ｻﾎﾟ/ﾌﾗｯﾄ25/故障/支払設定/ﾈｯﾄ相談/iPhone7下取 #au #大阪 #難波 #心斎橋 #iPhone","～買取好評受付中～ いらないスマホを現金に換えましょう！ 査定だけでも大歓迎♪ ご予約・お問い合わせ 045-392-7711 西武東戸塚店アネックス館６F アリマス本舗西武東戸塚店 #iPhone #修理 #東戸塚 #高価買取","【 #au 】 25〜28日 #週末　#大特価 限界 #値下げ #台数　#限定 #MNP #iPhoneXS #64GB #分割 26,040円 #iPhone #XS #256GB 分割 44,280円 #1,980円 〜… https://t.co/9zXxD51Z4P","CLIP on lenses for your #iPhone. Macro, Wide-angle & Telephoto lenses take your photography to the next level!… https://t.co/JorfyfbeM9","Amazon Echoの『Dot／Plus／Spot』比較！それぞれの特徴と違いは？ #AI(人工知能) #エンターテイメント #iPhone #Android #ワークスタイル https://t.co/jdoak5WfPD https://t.co/RBIKzPPqMy","iPhone史上最高のコスパ、「XR」こそ本命 XSよりバッテリーの持ちが良く、カラフルで魅力的なデザイン　 #iPhone #アップル #Apple https://t.co/NQovbsQ3g7","トヨタルーミー（YOYOTA ROOMY）インプレッション試乗！スズキソリオとの比較も！ https://t.co/7icyueypuc #iphone #toyota #suzuki","▶https://t.co/Hb5A1UPT03：レザーとスタッズを組み合わせた #iPhone XS／XR専用ケース デザインと機能性を兼備｜iPhone XS＆iPhone XR、ASCII徹底大特集！… https://t.co/jFMuBSXv12","iPhoneが充電できない… そんな悩みも解決致します！ まずはお気軽に ℡07055776503まで お問い合わせ下さい☆ #iPhone #充電 #修理","RT @docomoodawara: 😃 キャンセル出ました😃 2台のみ❗️ 【機種】#iPhoneXS 64GB 【価格】#限界価格 【対象】他社から乗換 【問合】09018820151 #iphone #月サポ #MNP #一括 #docomo #ドコモ #格安スマホ #小…","RT @DJNelly03: #musicproduction #music #musicians #marketing #musicmarketing #reggae #dancehall #soundcloud #edm #house #musicpromotion #N…","iPhoneの修理を少しでもお安くしたいとお考えの方は当店にお任せください！！町田駅周辺で一番の最安値でどんな故障も全力で復旧させていただきます☆https://t.co/A3Zgw1bks6 #iPhone修理町田 #iPhone故障町田　#iPhone","iPhone8 / iPhone7 ケース 【耐衝撃】高品質ソフトTPU使用 https://t.co/cBLUL6Uf8w #iPhone #iPhone7 #iPhone8 #アイフォン #iPhoneケース… https://t.co/o6eX33Xetk","Watch what happened at 4:05 in @saltycuress broadcast: Update on yesterday’s mess + new #iPhone? + #Periscope excl… https://t.co/Zwx0NjYz92","And when @iTunes updated the #afrobeats list today, @shattawalegh was the only #Ghanaian musician who was able to m… https://t.co/EaJGb9h2oX","RT @yamada_official: 【iPhoneXR/XS/XSMAX好評発売中】 iPhoneXRが10/26(金)に発売されました！ 簡単・便利・速いWEB予約はこちらから https://t.co/fXWogAq7jK #ヤマダ　#iphone https://t…","😃 キャンセル出ました😃 2台のみ❗️ 【機種】#iPhoneXS 64GB 【価格】#限界価格 【対象】他社から乗換 【問合】09018820151 #iphone #月サポ #MNP #一括 #docomo #ドコモ… https://t.co/CiqUP0nUz6","RT @hitsumabushiuya: おはようございます！ 昨日で今年の新型 #iPhone シリーズが出揃いましたね！ 今日もSNS映えする #金シャチうな丼 などで ぜひ新しいiPhoneでアップしてください！ では、本日も1日頑張りましょう！ https://t.…","【新規！、MNP！】iphone8！！！　 Android 一括?円　新規キッズケータイ一括0円各5台限定10/31まで　詳しくは 08026525459 お電話下さい。 ＃MNP　＃一括　＃0円　＃ドコモ　＃名古屋　#iphone ＃Android　＃アンドロイド　＃のりかえ","RT @T21094: セクハラって 毎月2人 Googleで検索だw #検索 #セクハラ #GooglePixel #バクモン #みんはや #AppleEvent #iPhone #iPhoneXR # https://t.co/79EN0qkRsz","#ﾀﾞｲﾏｯｸ #ﾄﾞｺﾓｾｰﾙ #MNP #在庫限り #10月30日まで 【機種】#F02J　 【特典】20,000CB 【条件】詳しくはお問合せ下さい。 【TEL】0254-20-2202 #特価 #iphone… https://t.co/CfVvRkOpwA","#ﾀﾞｲﾏｯｸ #ﾄﾞｺﾓｾｰﾙ #MNP #在庫限り #10月30日まで 【機種】#P01J　 【特典】10,000CB 【条件】詳しくはお問合せ下さい。 【TEL】0254-20-2202 #特価… https://t.co/9cmmfMFSh9","【10/27（土）台数限定】 ※さらに1万円値下げ中！！ 超お買い得です♪♪ #MNP　#一括？円 #iPhone XS 64GB　256GB（ゴールド、シルバーのみ） #ドコモ #月サポ #限界価格 #激安… https://t.co/4lUAHviWPO","RT @Applepresent2: プレゼント企画 iPhone XS Max スペースグレイ 512GB 応募方法 フォロー&RT！ 当選発表 11月3日 当選された方には DMにてご連絡致します！ #プレゼント企画 #無料プレゼント #Apple #アップル #i…","【#au 月末最終大特価🎉】 #iPhone8 #一括0円 🔥🔥 なんと購入サポートなし🙀 更に台あたり #CB 15000円‼️ 家族割、スマバリ、下取り2万機種👍 有料コンテンツあり⚠️ 残り台数あと僅かです🙇‍♂️… https://t.co/GDtfhfdN9t","#ﾀﾞｲﾏｯｸ #ﾄﾞｺﾓｾｰﾙ #MNP #在庫限り #10月30日まで 【機種】#iPhone8_64GB 【価格】#一括0円 【特典】#最大25,000CB 【条件】詳しくはお問合せ下さい。 【TEL】025… https://t.co/etQtRIPcw5","|||| $10 Off All Phone Cases! |||| Get In Loser #Art #Print #iPhone #iPhoneX #Phone #Case #TShirt #Hoodie #Mug & Mo… https://t.co/VTW8g7w5dQ","#ﾀﾞｲﾏｯｸ #ﾄﾞｺﾓｾｰﾙ #MNP #在庫限り #10月30日まで 【機種】#iPhoneX_64GB 【価格】#一括0円 【特典】#最大15,000CB 【条件】詳しくはお問合せ下さい。 【TEL】025… https://t.co/n1P0q7xZO0","Want a iPhone8? There are chance of having a contract! Ask more information 0296-34-1660 #iPhone #phone #new #yuuki #Chikusei","Trying my hand at #photography again on beautiful #MiamiBeach Youre welcome! #bikini #photoshoot #model #hobby… https://t.co/NjJdUFUTJu","#iPhoneX #スマホケース #拡散　#RT　#拡散希望 #フォロー　#iPhone #スマホケース #iPhoneケース #いいねした人全員フォローす #ありがとう #かわいい https://t.co/WV0xwTUXEp","🌟OYAMADAI SPECIAL WEEK🌟 #乗り換えで #iPhone8 64GBご契約で 本体代金 #一括0 ➕キャッシュバック #XS #XR ご希望の方は 4万円 #キャッシュバック 詳しくは店舗まで☎️↓… https://t.co/DzuKDrLEkO","使うのはスマホと少しの時間！ 時間を掛けなくても出来る✧︎*。 #副業 #スマホ #Android #iPhone","久しぶりに、起動してみる。 おぉ、こっ、こいつ動くぞ… #Apple #iPhone #iPad https://t.co/snhtfEdljp","#Halloween #キャンペーン　ミウイ橋本店限定 #iPhoneXS 超超大特価 #iPhoneXR 実質〇円 台数限定!!　早い者勝ち!! 条件：1個だけ #ミウィ橋本 #iPhone","Side by side. 😀 #Apple #iPhone #iPhone7PlusRed #iPhone7PlusProductRed #iPhoneX #AppleWatch #AppleWatchSeries4… https://t.co/FfZECPh8k1","RT @DJNelly03: #love #musicproduction #music #musicians #marketing #musicmarketing #reggae #dancehall #soundcloud #edm #house #musicpromoti…","Update on yesterday’s mess + new #iPhone? + #Periscope exclusive print flash sale! 🌊 #TGIF #talk #aloha #saltycures https://t.co/p4xOEEMMAw","MNP特価　10月台数限定キャンペーン iPhone 8(64GB)：一括○円 下取り等の適用条件や在庫状況等、詳しくはスタッフまで(^^)/ #なんば　#大阪　#ドコモ #一括　#新規　#CB　#iPhone #MNP　 #au　#Softbank","auショップイトーヨーカドー木場 定休日はございません。 10：00～20：00まで元気に営業しております。 新規、機種変更などお問い合わせお待ちしております。 #au #木場 #東京 #東西線 #門前仲町 #東陽町 #葛西… https://t.co/RciH9RIR5r","【定期8】脱獄端末クリスマスセール iPhone5s 5000円引 iPhone6 4000円引 iPhone6s 3000円引 フリマアプリでの取引可 1月30日まで受け付けてます #脱獄端末 #脱獄端末販売… https://t.co/v0XofPL1Bk","https://t.co/MqvIar5FUE #amazon #anime #iphone","RT @MarcGermann3: #CONCOURS #iPhone #Apple 🎁 Tente de remporter un #iPhone 7 avec 128 Giga de stockage. 😍 -RT ce tweet -Follow @MarcGerman…","【あっぽー速報】「 動画をダウンロード + 」 で簡単に動画ダウンロード　https://t.co/YRaBLp990x #iPhone","what is your name"]';
    
   } 
   else if($_GET['tweet']=='#paytm'){
      $t ='["paytm is awesome","useless app","wonderful experience","must use app","slow delivery","cash back not recieved","easy to use","easy to use","awesome experience","nice","good"]';
    
   }
   else{
       $t = '["Vintage Domino Necklaces, Sculptures by Julie Vandeberg . Available In Gallery! . #dominos #sculptures #vintage… https://t.co/52RNt31T7i","Looks like @dominos missed our street. This is how #Dominos delivered our pizza tonight. #pavingforpizza aint work… https://t.co/IBywLjcwsY","Isn’t it a little weird that a Pizza company is repairing our roads. #Dominos #Vote #VoteForChange https://t.co/bmuTFSpx79","Go #Dominos 🍕 #BMW #GETTHATBREAD 😄 #haha https://t.co/9i6IYkjaQ1","@DrunkCuseFan What did you decide on? First whiskey = #Dominos delivery. It was delish and both kids said "thank you.". Weird continues","#dominos #glenlivet #offstream https://t.co/AxUDYBkIV0","Ordered pizza for delivery on my way home in traffic. I made it home, bathed, watched news, assembled furniture & s… https://t.co/CupHEkiu83","In the words of the incomparable Etta James, “AAAAT LAST! My love has come along!” Of course by love, I mean pizza.… https://t.co/QhH56ihVYX","The team dominated or dominoted #cohesity #Halloween #costume #Dominos https://t.co/gHeBAyLnDL","Debating either pitching a tent in #Dominos or filling out an application, putting a shirt on and starting my on-th… https://t.co/2fdoaoItik","Is it normal for a 3 yr old to love mild buffalo wings from #Dominos 😳 #ShouldiBeWorried #OnlyMyKid","Thanks @dominos for being my weekly friday spot with that delicious crust and tasteful toppings. #dominos #topthat… https://t.co/8Wyi2bhI0Z","#dominos #dominospizza how do you allow the Atlantic highlands location to stay open?! Consistently screws up orde… https://t.co/5RnmpAoPFh","I usually love @dominos b/c they have the best thin crust pizza but after waiting almost 2 hours, pizza isn’t thin… https://t.co/GXglwId7Q6","#JoyJames Domino Club slamming them bones on a Friday afternoon! #Dominos #AddEmUp! #Snowcones #CastleberryISD https://t.co/Ce7Z8QZqMX","My #Dominos pizza account was hacked 10-23-18; 5 fraudulent orders across the US. Called the bank today about it an… https://t.co/RfHkCdaKzW","Dominos yemin ederim pizzan çok kötü arhavideki keyf pizzanın yanından bile geçemezsin #dominos","Scatter my corpse to the four winds of #dominos pizza","@hxlxnmxrxhxxd @PapaGinos @dominos @dominos would’ve never made that mistake in the first place.. hell theyre pavin… https://t.co/9AecqfMUEM","LMAO. #Dominos https://t.co/9YyABP5p6N","RT @DominosManitoba: This pizza has no idea how perfect its about to become! 😍🍕 Order now at: https://t.co/oGTOoCLfZm #BakedToPerfection…","Food Glorious Food 😍🍕 @TracyAr90128163 #dominos #pizza @dominos https://t.co/WRMkFmitw1","#Dominos @dominos @BJandMigs @999KISW just wanted to say thank you again for the East Bremerton Dominos for replac… https://t.co/shJpvcnvBF","Tonight we get our first Wildcats hockey home game @NMUHockey Each goal gets you 10% off carryout pizza and bread s… https://t.co/l89KXILgpk","Sup @dominos! When are you going to start baking with that #Vegan #cheese on top of that pizza #Dominos?","Happy campers 🍕 huxley_starr @BoiiRoblox4Loif #dominos @ Southsea https://t.co/ssyYrppMCw","dominospanama #malservicio #panama #dominos no acostumbro a hacer esto, pero parece que el sistema de dominos pizz… https://t.co/9DdfnZT8J2","Trying some samples! Bring them in? #tgif #happyfriday #friyay #myfathercigars #freeWifi #OpenLate #dominos… https://t.co/kuB87nRkN5","Living the half term dream... #dominos🍕 #wine #alarmsoff @ Farsley, Leeds, United Kingdom https://t.co/SUdmBj4mFa","Should have gotten pizza insurance @dominos #pizzainsurance #Dominos #coalfire https://t.co/LCRx5xwU6A","#WIN a $50 #DOMINOS #PIZZA #GIFTCARD! #FridayNight is #PizzaDelivery night! They also have #chicken #wings, #gluten… https://t.co/keFAFyuPRv","Need a little dough in your pocket? Apply for one of the #delivery biker positions at #Dominos. For more informatio… https://t.co/R85A8zdfsk","DISPO CE WEEK-END EN LIVRAISON!! !! #Poitiers #Dominos #BonPlan https://t.co/i9XVuMkj0u","Pizza! Its being served for Free Food Friday on this rainy day to make you smile. 🙂#ccusuitelife #thesuitelife… https://t.co/T7ql4Zp9a6","#NMUKNIGHT #additionstrategies #dominos #rotate #turnaround @NMBerkley_NJ @MrsGitto2nd https://t.co/2BbCaTspP6","الوجبة المثالية بصورة وحدة 😍! The perfect meal in one photo😍! #dominos #pizza #دومينوز https://t.co/udwkyB5EfC","😋🍕 Meer leuke quotes en grappige spreuken vind je hier --> https://t.co/y3TPKZHALm #quote #spreuk #pizza #dominos… https://t.co/7ThslXUet0","Quiero pizza pero me caga #Dominos","Fact of the day 🌟 Combining brand advertising on social media with full motion #DOOH has shown major benefits to… https://t.co/NbWAV5XuKg","Productive day for these 2 #life #dominos https://t.co/mfjpgpGETJ","@DominosKSA I hope to solve the problem اتمنى حل المشكلة ! #دومينوز #dominos @dominos @dominos ustomer satis… https://t.co/rC83vWZYJk","RT @alcptdpt: Still waiting for my correct order of parmesan twists from dominios 1 1/2 hr later #dominopiza #dominos after being told by m…",""Florian", #SPA N #SALON No. 222/14, Plot No.20, GST Road, Near #hotel Sangeetha & Upstairs of #Dominos, #Urapakkam… https://t.co/i3ZlPU1aEW","https://t.co/g73BPR3CG5 #domino #dominos #Dominoday #MakeDominoDayGreatAgain","#Jubilant FoodWorks Limited Q2FY19 standalone net #Profit rises yoy | read: https://t.co/a2H28Fa02r | #Asia… https://t.co/owCtKNAZ5X","Dominos in Gemert en Beek en Donk in eerste helft 2019 open #horeca #Dominos #Gemert #BeekEnDonk #pizza https://t.co/NqJPvbqroQ","Still waiting for my correct order of parmesan twists from dominios 1 1/2 hr later #dominopiza #dominos after being… https://t.co/5QS3bjMePv","Flat, burnt brownies... You failed me tonight @dominos you failed me... :( #notawinner #nofilter #burnt #nothappy… https://t.co/Bxv4oeUrJV","RT @ArtEase123: The hardest part about #NationalPepperoniPizzaDay is deciding WHOSE pizza! Memphis Pizza Cafe? Pyro’s Pizza? Dijourno’s? Ar…","#dominos really disappointed tonight. Cardboard stale pizza. Thumbs down 👎🏽 #dominospizza","Always make sure you tip your pizza lady well! #PizzaLady #Megan #Dominos #TheMeg #SoCal #GuacOut https://t.co/2007D6GGmw","So my sis donated plasma ealrier, unbeknownst to me. Sis got me cinnamon bread from #Dominos, and I complained she… https://t.co/ymroD7Qhc8","Called #Dominos tonight and the girl that answered goes “Thanks for calling Dairy Queen how may I help you” Ummmm… https://t.co/c1KH7KJ7fu","@dominos sending cheesey bread with sweet icing is careless but when the store proceeds to hang up mid phone call r… https://t.co/D83G8OhX5p","Dominos is Hiring! 🍕👍💰 Make Extra 💰! Flexible hours! Room for advancement! Pizza discounts! Go to :… https://t.co/iVlVYXdQpr","Dominos is Hiring! 🍕👍💰 Make Extra 💰! Flexible hours! Room for advancement! Pizza discounts! Go to :… https://t.co/1ysLeRL1pi","Dominos is Hiring! 🍕👍💰 Make Extra 💰! Flexible hours! Room for advancement! Pizza discounts! Go to :… https://t.co/uGOHZZhrVp","Dominos is Hiring! 🍕👍💰 Make Extra 💰! Flexible hours! Room for advancement! Pizza discounts! Go to :… https://t.co/udTOCIZa67","Dominos is Hiring! 🍕👍💰 Make Extra 💰! Flexible hours! Room for advancement! Pizza discounts! Go to :… https://t.co/k4EPDkP2im","Dominos is Hiring! 🍕👍💰 Make Extra 💰! Flexible hours! Room for advancement! Pizza discounts! Go to :… https://t.co/uN1nf1cUPB","Dominos is Hiring! 🍕👍💰 Make Extra 💰! Flexible hours! Room for advancement! Pizza discounts! Go to :… https://t.co/G6lghjd7vU","Dominos is Hiring! 🍕👍💰 Make Extra 💰! Flexible hours! Room for advancement! Pizza discounts! Go to :… https://t.co/9c47N1wwl2","Dominos is Hiring! 🍕👍💰 Make Extra 💰! Flexible hours! Room for advancement! Pizza discounts! Go to :… https://t.co/x5IBSSoQWZ","Dominos is Hiring! 🍕👍💰 Make Extra 💰! Flexible hours! Room for advancement! Pizza discounts! Go to :… https://t.co/CpmW485dGN","Dominos is Hiring! 🍕👍💰 Make Extra 💰! Flexible hours! Room for advancement! Pizza discounts! Go to :… https://t.co/lIfgV2Fb7i","what is your name"]';
   }
}


   
    
    
   
    
    
    
    $curl = curl_init();
    //$tweets ='[';
    //$tweets= $tweets.'"the movies is good"';
    //$tweets= $tweets.']';
    //echo $tweets;
    //$tweets = '["the movie was not really the best","i am a good boy"]';
    curl_setopt_array($curl, array(
                                   CURLOPT_PORT => "8000",
                                   CURLOPT_URL => "http://139.59.34.103:8000/getsentiment",
                                   CURLOPT_RETURNTRANSFER => true,
                                   CURLOPT_ENCODING => "",
                                   CURLOPT_MAXREDIRS => 10,
                                   CURLOPT_TIMEOUT => 30,
                                   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                   CURLOPT_CUSTOMREQUEST => "POST",
                                   CURLOPT_POSTFIELDS => $t,
                                   CURLOPT_HTTPHEADER => array(
                                                               "Content-Type: application/json",
                                                               //"Postman-Token: 55deee47-1b79-44fa-9481-f3acccae23c7",
                                                               "cache-control: no-cache"
                                                               ),
                                   ));

    $response = curl_exec($curl);
    //echo $response;
    $err = curl_error($curl);
    str_replace("[","",$response);
    str_replace("]","",$response);
    str_replace("["," ",$response);
    $arr= explode(",",$response);
    $p = 0;
    $n = 0;
    echo count($arr); 
    for($i=1;$i<count($arr)-1;$i++)
    {
        if($arr[$i]>1)$p++;
        else if($arr[$i]<1) $n++;
    }
   // echo $p."<br>".$n;
   $p = ($p/($p+$n))*100;
   $ne = 100-$p;
    $dataPoints = array(
  	array("y" => $p, "label" => "positive%" ),
  	array("y" => $ne, "label" => "negative%"  )
  	
  );

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
      //  echo $response;
    }
    



 ?>
 
 <!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
    <script
       src="https://code.jquery.com/jquery-3.3.1.js"
       integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
       crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
      crossorigin="anonymous"></script>
<script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "<?php echo $_GET['tweet'];?>" 
	},
	axisY: {
		title: "Sentiments"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## %",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

}
</script>
</head>
<body >

<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<div class="mb-5 container">
  <p class="text-info text-right display-5">Powered By S poll</p>

</div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</body>
</html>

