// window.onresize = setHtmlFontSize
// window.onload = setHtmlFontSize
// function setHtmlFontSize() {
//   const htmlWidth = document.documentElement.offsetWidth || window.innerWidth
//   const htmlDom = document.documentElement
//   htmlDom.style.fontSize = htmlWidth / 120 + "px"
// }
// setHtmlFontSize()

//回到顶部
// const query = (e, isSingleElement = true) => isSingleElement ? document.querySelector(e) : document.querySelectorAll(e);

// window.onscroll = function () {
//     if (document.documentElement.scrollTop + document.body.scrollTop > 100) {
//         // 这里设置成flex是为了保证样式，一般设置成block即可
//         query(".back-top").style.display = "block";
//     }
//     else {
//         query(".back-top").style.display = "none";
//     }
// }

// 点击按钮，返回顶部
// function toTop() {
//     cancelAnimationFrame(timer) //为了保险，先清除下动画帧（这行代码不加，也能正常运行）

//     var scrollTop = document.documentElement.scrollTop;
//     document.documentElement.scrollTop = scrollTop - 50
//     if (scrollTop > 0) {
//         requestAnimationFrame(toTop)
//     } else {
//         cancelAnimationFrame(timer)
//     }
// }

// var timer = null

// query('.back-top').onclick = function () {
//     timer = requestAnimationFrame(toTop)
// }





//菜单
// const menu_bar = query('header .menu_bar')
// const right_more = query('header .right_more')
// const back_page = query('header .menu_bar .left .back_page')
// const menu_txt_list = query('header .menu_bar .menu_list .menu_txt',false)
// menu_txt_list.forEach(ele=>{
//     // console.dir(ele);
//     //>1表示li子元素不止一个a，还有右边箭头a，可以点击
//     if(ele.children.length>1){
//         ele.children[1].onclick=()=>{
//             const content =ele.children[2]
//             if(content.classList.length===1){
//                 content.classList.add('content_active')
//             }else{
//                 content.classList.remove('content_active')
//             }
//         }
//     }
// })
// right_more.addEventListener('click',()=>{
//     // console.log(24234);
//     menu_bar.classList.add('menu_bar_avtive')
// })
// back_page.addEventListener('click',()=>{
//     menu_bar.classList.remove('menu_bar_avtive')
// })



