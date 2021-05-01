//htmlとCSSをjavascriptで変更したりする
//リストにマウスを乗せるとある要素のバックグランドイメージが変更される。
//今回errorが起こったのはgetElementByIdとgetElementClassNameの違いに気づくのが難しいのと、backgroundのurlの書き方。
//getElementByIdは対象が一つなので、普通に使えるが、getElementByClassNameはクラスが複数あるため、配列で返ってくるので指定のしかたが、list[0]のように配列の中まで指定して使わなければならない。
//バックグランドのurlの指定についてだが、urlを''で囲わなければならない、理由としてurlというものがjsでは定義されていないためだと思われる。

const li1 = document.getElementById('listone');
const li2 = document.getElementById('listtwo');
const li3 = document.getElementById('listthree');
const gpg = document.getElementsByClassName('gp-g');

li1.addEventListener('mouseover', () => {
  
gpg[0].style.background = 'url("http://tamablog.work/cram_school/wp-content/uploads/2021/04/horse-6123173_1920-1.jpg")';
 gpg[0].style.backgroundSize = "cover";
 gpg[0].style.backgroundPosition = "center";
  
  }, false);
  
li2.addEventListener('mouseover', () => {
  
　　gpg[0].style.background = 'url("http://tamablog.work/cram_school/wp-content/uploads/2021/05/board-3700116_1920.jpg")';
  gpg[0].style.backgroundSize = "cover";
  gpg[0].style.backgroundPosition = "center";
  
  }, false);
  
li3.addEventListener('mouseover', () => {
  
　　gpg[0].style.background = 'url("http://tamablog.work/cram_school/wp-content/uploads/2021/05/graduation-2038866_1920.jpg")';
  gpg[0].style.backgroundSize = "cover";
  gpg[0].style.backgroundPosition = "center";
  
  }, false);
