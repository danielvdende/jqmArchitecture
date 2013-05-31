#Sketches 
In this document we provide a number of sketches of the architecture of jQuery mobile. To provide a comprehensive overview, we provide a number of different perspectives. First, we will briefly describe what jQuery Mobile is. jQuery Mobile is a JavaScript framework aimed specifically at the mobile web and mobile apps. It is touch-driven and designed to be completely cross-platform. jQuery Mobile is built on the widely-used jQuery JavaScript library, and thus has a syntax that is very familiar to a majority of web developers.

Our sketches, presented in this document, were initially created in a more rough-and-ready manner. The original sketches can be found [here](https://github.com/delftswa/jquery-mobile/issues/1). We used these sketches as a basis, and had quite some discussion about what the most suitable representation was. Some of this discussion can be seen in the previously referenced issue. Having first each individually created a sketch, we then discussed these sketches and worked collaboratively towards the sketches that are present in this document.

We will discuss the following designs: (as discussed by Andre van der Hoek in his guest lecture)
* Application Design
* Interaction Design
* Architectural Design
* Implementation Design

##Application Design
With the application design, the functional view of JQuery-mobile is given. JQuery mobile says the following on their website:

>“A unified, HTML5-based user interface system for all popular mobile device platforms, built on the rock-solid jQuery and jQuery UI foundation. Its lightweight code is built with progressive enhancement, and has a flexible, easily themeable design. “



JQuery mobile is:
* **Touch Optimized,** JQuery mobile focuses on mobiles and tablets, but also on desktop applications. Because it focuses on mobiles and tablets, it must support touch event and it has a friendly User Interface Design.
* **Light Weight,** it has to be light weighted, because if you have a mobile website, and you need to load an enormous file, the page will load too slow. JQuery Mobile also provides a custom Builder so it creates a JavaScript-file with only the functions you selected. This can limit the file size and result in faster pageload.

* **Cross Platform,** JQuery mobile is created not only for mobile apps, but also for applications.

* **Easy to use,** the JQuery mobile framework has the following motto: 
>“write less, do more”. 

So they want it easy to use, it provides a theme builder, with dynamically creates a css-file based on your preferences. It also uses the Jquery Syntax, which is used in a wide area.

![application design](https://f.cloud.github.com/assets/4237293/458601/57a9743c-b3de-11e2-9e3e-cdc5e659b7db.jpg)


##Interaction Design
![picture](https://f.cloud.github.com/assets/4243319/471280/7d4b4f3c-b715-11e2-9d38-f365088a8522.png)
The developer is able to influence the three main components: HTML, jQuery Mobile and jQuery. All components are strictly connected to each other, i.e. they work together to achieve their goal: dynamic mobile web pages, with good looking user interface. The core component here is jQuery Mobile, which contains jQuery functions applied for mobile web pages and HTML tags, that enables the developer to simply apply those functionalities in HTML. The result of the corporation between those three components can be viewed by the end user.

##Architectural Design

![architectural design](https://f.cloud.github.com/assets/4243319/459267/143c534e-b3fd-11e2-9456-ec6bf93192d0.png)


This diagram describes the architecture of JQuery Mobile. JQuery mobile uses one or more widgets to perform a specific action. The widgets consist of one or more methods and/or events. For example a widget can only consist of the following two methods: changePage() and loadPage() in combination with the following events: pageLoad and pageChange.

Moreover to determine the layout of a web page JQuery mobile can use the grid layout or responsive grid or even a combination of both layout styles.

The grid layout is a layout manager that lays out a container's components in a rectangular grid. All components in the layout are given equal size. One, but not both, of rows and cols can be zero, which means that a number of objects can be placed in a row or in a column.

The responsive grid adapts to the available screen space. For example if the screen is made smaller than the grid responds automatically to it by resizing/reordering the components on the grid. An example of the responsive grid can be found [here](http://view.jquerymobile.com/1.3.1/dist/demos/widgets/table-reflow/). If you change the size of the screen the columns and content responds by changing the layout for a better view.

Besides the widgets and miscellaneous, there is also an option “box”. With the option we mean the several options that can be combined with specific widget. For example using color theme to change the theme of the widgets. But these options and functionalities differs per widget.

This sketch had been based on code inspection and reading information on the official website of [JQuery Mobile](http://api.jquerymobile.com/page/). Moreover this [website](http://mobile.smashingmagazine.com/2013/03/31/getting-started-jquery-mobile/) explained the basic of how JQuery Mobile works which I have also used as a reference to sketch this architectural design. 

##Implementation Design
![picture](https://f.cloud.github.com/assets/4243319/471277/44d2826a-b715-11e2-8963-76e3f963fad2.jpg)

jQuery mobile’s implementation is based on the idea of a webpage consisting of three main elements:
*  HTML
*	CSS
*	JavaScript

jQuery Mobile (JQM) plays a role in each of these.

Firstly, it uses particular HTML attributes to identify different types of elements on a page. For example, JQM can define multiple ‘pages’ within a single HTML file. JQM adapts the styling of each element by applying particular CSS rules to specific classes. It defines these classes itself and applies them depending on what HTML attributes were added. In this way, JQM can create widgets, with various types of options and events associated with them. 
Finally, jQuery Mobile implements a number of JavaScript functions used for both animation and event handling. In this way, JQM affects all three aforementioned components. Furthermore, JQM is based on the widely-used jQuery JavaScript library, depicted as jQuery Core in the diagram above.

##Behavioural chart
jQuery Mobile's use can be quite easily described, particularly given the quite extensive description and diagrams provided above. If a developer wishes to make use of the jQuery Mobile library, he/she needs only to embed the jQuery library JavaScript file, the jQuery Mobile JavaScript file, and the jQuery Mobile CSS file. Once this has been done, the developer has access to all widgets, methods, and events defined by the jQuery Mobile library. A general behaviour following these steps is very hard to define, as the whole concept of the jQuery Mobile library is one in which distinct widgets can be used depending on the situation and design the developer wishes to achieve.
