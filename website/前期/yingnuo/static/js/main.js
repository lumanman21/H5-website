
const gsap = document.querySelector('.in_ab_louti');
const gsap2 = document.querySelector('.v_close');

var t1 = new TimelineMax().paused(true).reversed(true)
var t2 = new TimelineMax().paused(true).reversed(true)

gsap.addEventListener('click',()=>{
    t2.play();
})
gsap2.addEventListener('click',()=>{
    t2.reverse();
})

// t1.play();
// t1.to('.car_1',2,{
//     rotate:0,
//     ease:'elastic.out(1,0.8)',
//     top:'80%'
// },0)


t2.to('.car_1',2,{
    ease:'elastic.out(1,0.8)',
    // scale:50,
    width:'500px',
    height:'500px',
    display:'block',
    opacity:1,
    backgroundColor:'black',
    
},0.5)

// t2.to('.car_3',2,{
//     ease:'elastic.out(1,0.8)',
//     // scale:50,
//     width:'100%',
//     height:'100vh',
//     display:'block',
//     opacity:1,
//     backgroundColor:'black',
//     borderRadius:'0',
// },2.5)




t2.to('.car_2',5,{
    ease:'elastic.out(1,0.8)',
    width:'1920px',
    height:'1920px'
},0.3)


// to 动画结束状态 from动画开始的状态