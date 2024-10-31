/*
 * fixedScroll.js 滚动固定插件
 * @DH
 * https://denghao.me
 *
 * 示例：
 * $('.box').fixedScroll()
*/
(function () {
    let fixedScroll = function ($fixedEl, opts) {
        this.defaults = {
            hookOffset: 0, //hook区域顶部偏移量

            offset: 0, //固定元素顶部偏移量
            stickEndEl: '', //固定结束位置的元素
            callback: ''
        };
        $.extend(this, this.defaults, opts);
        this.flag = true;
        this.stickTop = 0; //固定元素的原始位置
        this.init_stickTop = 0; //用于重计算高度
        this.stickBottom = 9999999; //固定元素的结束位置
        this.fixedEl = $fixedEl; //固定元素
        this.fixedElH = $fixedEl.height();
        this.fixedElW = $fixedEl.width();
        this.fixedElL = $fixedEl.offset().left;
        this.winEl = $(window);
        this.offset = parseInt(this.offset || 0);
    };
    fixedScroll.prototype = {
        init: function () {
            if (this.fixedEl.length > 0) {
                this.stickTop = this.fixedEl.offset().top;
                this.init_stickTop = this.stickTop;
            }

            if (this.stickEndEl.length > 0) {
                this.stickBottom = this.stickEndEl.offset().top;
            }
            this.distance = this.stickBottom - this.stickTop - this.fixedElH - this.offset / 2;
            this.flag && this.events();
            this.flag = false;
        },
        // 固定
        stickHandle: function () {
            if (this.winEl.scrollTop() > this.stickTop - this.offset) {
                if (this.winEl.scrollTop() < this.stickBottom - this.fixedElH - this.offset) {
                    this.fixedEl.css({
                        "position": "fixed",
                        "top": this.offset,
                        "left": this.fixedElL,
                        "width": this.fixedElW,
                        "height": this.fixedElH,
                        "transform": "translateY(0)"
                    });
                    typeof this.callback == 'function' && this.callback(1);
                } else {
                    this.fixedEl.css({
                        "top": "auto",
                        "left": "auto",
                        "position": "static",
                        "transform": "translateY(" + this.distance + "px)"
                    });
                    typeof this.callback == 'function' && this.callback(0);
                }
            } else {
                this.fixedEl.css({
                    "top": "auto",
                    "position": "static"
                });
                typeof this.callback == 'function' && this.callback(0);
            }
        },
        // 动态计算高度
        resizeHeight: function (hasNewTop) {
            if (this.fixedEl.length > 0) {
                this.stickTop = hasNewTop ? this.fixedEl.offset().top : this.init_stickTop;
            }
            if (this.stickEndEl.length > 0) {
                this.stickBottom = this.stickEndEl.offset().top;
            }
            this.distance = this.stickBottom - this.stickTop - this.fixedElH - this.offset / 2;
        },
        // 滚动到指定位置
        refresh: function (i) {
            let top = this.stickTop - this.hookOffset; // 导航相关代码已去除
            this.scrollTop(top, 120);
        },
        scrollTop: function (scrollTo, time) {
            var scrollTop = document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop;
            var scrollFrom = parseInt(scrollTop),
                i = 0,
                step = 5;
            scrollTo = parseInt(scrollTo);
            time /= step;
            var interval = setInterval(function () {
                i++;
                let top = (scrollTo - scrollFrom) / time * i + scrollFrom;
                document.body.scrollTop = top;
                document.documentElement.scrollTop = top;
                if (i >= time) {
                    clearInterval(interval);
                }
            }, step)
        },
        events: function () {
            let _this = this;
            // 滚动监听
            this.winEl.on("scroll", function () {
                _this.stickHandle();
            });
        },
    }

    $.fn.fixedScroll = function (opts) {
        let drag = new fixedScroll(this, opts);
        drag.init();
        this.data('fixedScrollInstance', drag); //保存实例
        return drag;
    }

    //兼容模块
    if (typeof module !== 'undefined' && typeof exports === 'object') {
        module.exports = fixedScroll;
    } else if (typeof define === 'function' && (define.amd || define.cmd)) {
        define(function () {
            return fixedScroll;
        })
    } else {
        window.fixedScroll = fixedScroll;
    }
}).call(function () {
    return (typeof window !== 'undefined' ? window : global)
}, $);