# 个人作业1——web前端初探

### 1. 针对任意网页，调研其不同方式请求

1. 打开bilibili首页，按下f12，开启资源监视，并点击”漫画“栏

![image-20230129170211579](C:\Users\zsr\AppData\Roaming\Typora\typora-user-images\image-20230129170211579.png)

2. 选中过滤`fetch/XHR`类型的数据包，依次检查数据标头，寻找到数据标头为POST类型的请求

![image-20230129235455518](C:\Users\zsr\AppData\Roaming\Typora\typora-user-images\image-20230129235455518.png)

3. 查看其响应数据包，包含了对各个漫画栏目的推荐值评分、分类标签、排行榜类别、是否完结、编号等信息，响应的网页利用这些信息来重新显示网页，如下所示：

![image-20230130001243092](C:\Users\zsr\AppData\Roaming\Typora\typora-user-images\image-20230130001243092.png)

4. 选中过滤`fetch/XHR`类型的数据包，依次检查数据标头，寻找到数据标头为GET类型的请求（此处检查的为第一个数据包）

![image-20230130001434816](C:\Users\zsr\AppData\Roaming\Typora\typora-user-images\image-20230130001434816.png)

5. 查看其响应数据包，其中包含了登录相关的信息，由于提前在网页上登录过bilibili，返回数据包中`isLogin`为true，另外还包含了其他登录相关信息，如下所示：

![image-20230130001739133](C:\Users\zsr\AppData\Roaming\Typora\typora-user-images\image-20230130001739133.png)

### 2. 针对任意网页，使用JQuery触发事件

1. 打开京东首页，同时打开网页控制台，加载jQuery

![image-20230130153256532](C:\Users\zsr\AppData\Roaming\Typora\typora-user-images\image-20230130153256532.png)

2. 输入`$("div").hide()`可发现，整个网页的元素都被隐藏了，再次输入`$("div").show`即可恢复

![image-20230130154037601](C:\Users\zsr\AppData\Roaming\Typora\typora-user-images\image-20230130154037601.png)

![image-20230130154109071](C:\Users\zsr\AppData\Roaming\Typora\typora-user-images\image-20230130154109071.png)

3. 检查“京东超市”元素，发现其具有`href`属性值，则使用该属性来对其进行选择，实现对“京东超市”元素的显示与隐藏，筛选器语句为`$("a[href='https://chaoshi.jd.com/']")`,然后调用用hide和show函数即可

![image-20230130155342558](C:\Users\zsr\AppData\Roaming\Typora\typora-user-images\image-20230130155342558.png)

![image-20230130155401360](C:\Users\zsr\AppData\Roaming\Typora\typora-user-images\image-20230130155401360.png)

### 3. 完成一个浏览器插件

本人计划使用Tampermonkey网站编写一个针对csdn博客的阅读优化插件，包括解除关注博主后阅读全文和代码自动展开两个功能，设计思路如下：

1. 前者需要检查当前是否存在“关注博主后阅读全文”这个元素，通过`class`属性进行检查，如果存在，则删除该元素，并且让隐藏的文章在浏览器中显示
2. 后者相对简单，只需点击“展开”对应的元素即可

最终代码如下所示：

```javascript
(function() {
    'use strict';
    // 解除关注博主后阅读全文
    if ($('.hide-article-box').length > 0) {
        $('.hide-article-box').remove();
        $('article #article_content').css('height', '');
    }
    // 代码自动展开
    $('.hide-preCode-bt').click();
})();
```

效果展示如下：

- 未加载脚本前：

![image-20230130164749815](C:\Users\zsr\AppData\Roaming\Typora\typora-user-images\image-20230130164749815.png)

![image-20230130164711287](C:\Users\zsr\AppData\Roaming\Typora\typora-user-images\image-20230130164711287.png)

- 加载脚本后：

![image-20230130164837220](C:\Users\zsr\AppData\Roaming\Typora\typora-user-images\image-20230130164837220.png)

可以看到，脚本执行了一次，代码被展开了

![image-20230130164934720](C:\Users\zsr\AppData\Roaming\Typora\typora-user-images\image-20230130164934720.png)

可以看到，脚本执行了一次，“关注博主即可阅读全文”被移除了

