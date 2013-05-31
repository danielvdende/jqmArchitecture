# Stakeholder analysis

In this document we create a stakeholder analysis, based on Rozanski and Wood's book. 

The definition of a stakeholder according to Rozanski and Wood:
> A stakeholder in the architecture of a system is an individual, team, organization, or classes thereof, having an interest in the realization of the system.

The requirements on stakeholders analysis:
> The stakeholder analysis should be based on evidence, such as existing documentation, open issues, or pull requests.
> The stakeholder analysis should support better discussions on recent open issues.

Stakeholers are important for the system, because they form the most important group of people who should be to taken into account when an architect develops a system. 
Stakeholders are most affected by your architectural decisions and have influence over the shape and eventual success of the development. Moreover they have specialist knowledge of the business or technology domain, which can provide useful advise to your system.

## Stakeholders classes

### Acquirers 
Rozanski & Woods' definition:
> Oversee the procurement of the system or product. In a system development project, acquirers are often referred to as business sponsors, and for a product development, acquirers are likely to be senior executives from the sales, marketing, and technology groups. 
>

This group of stakeholders decide whether the system meets the objectives of the company. On the acquiring site, the jQuery Foundation have to authorize funding to the development of jQuery Mobile.

- **[Dave Methvin]( https://github.com/dmethvin)**, president of the jQuery foundation and a long-time contributor to jQuery, providing extensive help on the jQuery bug tracker and in the jQuery discussion forums. He generally drives the direction of the library.
- **Several project [sponsors]( http://jquerymobile.com/)** like [Filament Group](filamentgroup.com), [Mozilla Corporation](mozilla.org), [Palm](developer.palm.com/), [Blackberry](https://developer.blackberry.com/), [Nokia](http://www.developer.nokia.com/Develop/Web/), [Device Atlas](https://deviceatlas.com/), [Jive](http://www.jivesoftware.com/), [Promobile](http://www.motorolasolutions.com/US-EN/Business+Product+and+Services/Software+and+Applications/RhoMobile+Suite), [dotMobi](http://dotmobi.com/).  Each company or project using jQuery has at some point decided to start investing time and thus money in using jQuery. Therefore these sponsors are acquirers of jQuery Mobile.
- **[Richard D. Worth](https://github.com/rdworth)**, Executive director @ jQuery foundation. He is also a jQuery UI Developer, Consultant, Speaker, Author. [Here](http://www.slideshare.net/rdworth), some slides of his presentation can be found. Moreover he also has a [github account](https://github.com/rdworth).


### Assessors
> Oversee the system’s conformance to standards and legal regulation. Assessors’ concerns are focused around testing and on formal, demonstrable compliance 
>

This group of stakeholders include peoples of the jQuery Foundation who are dealing with the legal regulations and standards.
- **[Joel G. Kinney](https://github.com/joelgkinney/)**, is the Legal Counsel of jQuery. He deals with all the legal regulation.
- **[Yehuda Katz]( https://github.com/wycats)**, is a member of the Ruby on Rails Core Team, and spends much of his time traveling to promote and evangelize both jQuery and Rails. Moroever he is the Standards Lead of jQuery. 


### Communicators
> Explain the system to other stakeholders via its documentation and training materials. 
>

This group of stakeholders are responsible for documentating documents related to jQuery mobile. People who provide training materials also fall into this group of stakeholders.
-	**[Richard D. Worth](https://github.com/rdworth)**, Executive director @ jQuery foundation. He is also a jQuery UI Developer, Consultant, Speaker, Author. [Here](http://www.slideshare.net/rdworth), some slides of his presentation can be found. Another [presentation](http://www.confreaks.com/videos/1000-jqcon2012-jquery-foundation-keynote), can be found here.
-	**[Anne-Gaelle Colom]( https://github.com/agcolom)**, is the documentation lead in the jQuery-mobile team. She is responsible for documentations of the jQuery-Mobile team. Issue we inspected related to her are <a href="#4311">#4311</a>, <a href="#3773">#3771</a> 
-	**[Todd Parker]( https://github.com/toddparker)**, lead of jQuery-mobile. He publishes post on the official [jQuery-Mobile website]( http://jquerymobile.com/blog/author/todd/)** about new releases of jQuery-Mobile. Moreover he is a jQuery board member and project and design lead for the jQuery Mobile team. Issues:  <a href="#1579">#1579</a>, <a href="#5173">#5173</a>
-	**[Karl Swedberg](https://github.com/kswedberg)**, he is actively involved in maintaining content on all jQuery sites, especially the jQuery core API site.
- **[Corey Frang](https://github.com/gnarf37)**, he is the Infrastructure Lead of jQuery Mobile. 
- **[John Resig](https://github.com/jeresig)**, is the creator of the jQuery JavaScript Library who started jQuery-Mobile Project in 2010. He works with the jQuery dev team and the jQuery board to help set the direction of the project. He also writes blogs about new update of jQuery Mobile.
- **[Jasper de Groot](https://github.com/uGoMobi)**, one of the admins who merges project files of jQuery project.He is going to have a [presentation](http://lanyrd.com/2013/dutch-mobile-conference/scfmbq/) about jQuery Mobile and Responsive Web Development. Related issues: <a href="#5173">#5173</a>,<a href="#2661">#2661</a>
-	**[Dave Methvin]( https://github.com/dmethvin)**, a long-time contributor to jQuery, providing extensive help on the jQuery bug tracker and in the jQuery discussion forums. He generally drives the direction of the library. Moreover he also published a short [blog](http://www.learningjquery.com/author/dmethvin) about how jQuery works. 


### Developers
Rozanski & Woods' definition:
> Construct and deploy the system from specifications (or lead the teams that do this). Developers need to understand the overall architecture but also have specific concerns that focus on development issues.
>

As the definition says, stakeholders in this class have specific concerns that focus on development issues. This will most of the time be adding functionalities to jQuery Mobile, but also resolving problems in the existing versions.

- **[John Resig](https://github.com/jeresig)**, the creator and lead developer of the jQuery JavaScript library. Because of his large contribution of jQuery and also works on the development of jQuery Mobile.
-	**[Jasper de Groot](https://github.com/uGoMobi)**, Team member of jQuery Mobile and owner at uGoMobi. He's an active member on the jQuery Mobile github-repository and because he's on of the team members he's involved in the development of jQuery Mobile. Related issues: <a href="#4024">#4024</a>, <a href="#3956">#3956</a>, <a href="#3577">#3577</a>, <a href="#5959">#5659</a>, <a href="#4311">#4311</a>, <a href="#5167">#5167</a>, <a href="#3750">#3750</a>, <a href="#4698">#4698</a>,  <a href="#3750">#3750</a>,  <a href="#5173">#5173</a>, <a href="#2865">#2865</a>, <a href="#5113">#5113</a>
-	**[Todd Parker](https://github.com/toddparker)**, Lead of the jQuery Mobile team. Because he leads the entire jQuery Mobile team, he cannot be missing in this list of stakeholders. He has contibution on the following inspected issues: <a href="#4024">#4024</a>, <a href="#3956">#3956</a>, <a href="#1373">#1373</a>, <a href="#4311">#4311</a>,  <a href="#3750">#3750</a> <a href="#3771">#3771</a>, <a href="#5167">#5167</a>, <a href="#2661">#2661</a>, <a href="#2865">#2865</a>, <a href="#5113">#5113</a>, <a href="#3978">#3978</a>
-	**[John Bender](https://github.com/johnbender)**, member of the jQuery Mobile team, and like his Curriculum Vitaes says: "Senior software engineer focused on the jQuery Mobile open source JavaScript library.". Related issues: <a href="#3771">#3771</a>, <a href="#2415">#3415</a>, <a href="#4024">#1579</a>, <a href="#3771">#3771</a>, <a href="#3415">#3415</a>,<a href="#1579">#1579</a>, <a href="#3978">#3978</a>
-	**[Other JQuery (Mobile) team members](http://jquery.org/team)**, there are a lot of other team members working on jquery mobile. There are several jQuery teammembers working on the development of jQuery as on the development of jQuery Mobile.
-	**Other contributors on github**. On github there are a lot of users providing functionalities for jQuery Mobile, they also help with solving problems. [a list of jQuery contributors can be found here](https://github.com/jquery/jquery-mobile/blob/master/AUTHORS.txt). See the issues below for the names of developers mentioned in issues.


### Maintainers
Rozanski & Woods' definition:
> Manage the evolution of the system once it is operational. 
>

It means to keep things in state, up-to-date, in good condition. This includes the code of course, but also things like documentation about the system.

-	**[Anne-Gaelle Colom](https://github.com/agcolom)**, Leader of the documentation within the jQuery-mobile team. She ensures that documentation will be up-to-date. Issue we inspected related to her are <a href="#4311">#4311</a>, <a href="#3773">#3771</a>.
-	**[Todd Parker](https://github.com/toddparker)**, Lead of the jQuery Mobile team. He publishes posts on the official [JQuery-Mobile website]( http://jquerymobile.com/blog/author/todd/) about new releases of JQuery-Mobile.
-	**[Jasper de Groot](https://github.com/uGoMobi)**, member of the jQuery Mobile team. He's active on Github and maintains the repository. He reference to other issues within the repository, closes issues. In this way he maintains the repository. Related issue: <a href="#4698">#4698</a>, <a href="#2865">#2865</a>, <a href="#3978">#3978</a>.

### Production engineers
Rozanski & Woods' definition:
> Production engineers design, deploy, and manage the hardware and software environments in which the system will be built, tested, and run.
> Their concerns: responsible for server and desktop computers, networking infrastructure, special-purpose appliances (search engines, communication gateway), peripherals (printers, cell phones,…), infrastructure software (operating systems, system management, relation databases,…)
>

This is not really applicable for jQuery Mobile. This Because jQuery Mobile is just a libary build on jQuery and that's build on JavaScript. Because it uses the jQuery syntax, you can say jQuery provide the software environment, but this isn't completely true. Also the environment in which the system is tested, [QUnit](http://qunitjs.com/), is build by the jQuery Foundation.


### Suppliers
Rozanski & Woods' definition:
> Build and/or supply the hardware, software, or infrastructure on which the system will run. This type of stakeholders class is usually not involved in building, running, or using the system, but they may impose constraints due to the limitations or requirements of the products they supply. 
>

This class of stakeholders contains people/groups which supply the infrastructure on which jQuery Mobile will run. Because jQuery Mobile is created for web and in-app, the following stakeholders fit in this class based on web:

-	Google Chrome Team
-	Mozilla Firefox Team
-	Microsoft Internet Explorer Team
-	Apple Safari team
-	Other browsers

the following stakeholders fit in this class based on in-app:
-	Android Team
-	Blackberry Team
-	iOS Team
-	Windows Phone Team
-	Other Operating Systems

All these stakeholders supply the software and infrastructure.

### Support staff
Rozanski & Woods define support staff as follows:
> Provide support to users for the product or system when it is running.
>

Support staff help external parties once the system has been released. This includes providing technical support to users and possible external developers. In the case of jQuery Mobile this means these stakeholders assist external developers that are having problems using the library. As jQuery Mobile is collaboratively developed in an open source manner, this assistance is often given via fora and issues, pull requests, and comments on github. Github in particular offers specific bug and issue reporting options, so users can indicate the seriousness of the problem they have encountered. The use of github in this way also enables the entire community to get involved. This means there does not need to be a specific support department within the jQuery team. Rather than have specialized support staff, other users that have encountered similar problems may also be of assistance. The main locations for this community support are the [jQuery Mobile forum]( https://forum.jquery.com/jquery-mobile) and the [issue list on github](https://github.com/jquery/jquery-mobile/issues?direction=desc&sort=created&state=open). Apart from these two communities, we also identified the following support staff: 
- **[Ralph Whitbeck](https://github.com/RedWolves)**. Ralph Whitbeck is a board member of the jQuery foundation. His main role is that of developer relations, providing support and communicating with users in order to ascertain their desires and needs.
-	**[Dave Methvin](https://github.com/dmethvin/)**. Dave Methvin is the president of the jQuery foundation and is the jQuery Core lead. In this role his influence on the code of the jQuery Mobile library is limited, but he provides extensive help on the bug tracker and in the jQuery discussion fora. In this way he provides considerable support to the users of jQuery Mobile.
- **[Jasper de Groot](https://github.com/uGoMobi)**, member of the jQuery Mobile team. He's active on Github and maintains the repository. He reference to other issues within the repository, closes issues. In this way he maintains the repository. Related issues: <a href="#3956">#3956</a>, <a href="#5167">#5167</a>,<a href="#3863">#3863</a>, <a href="#3978">#3978</a>.
- **[Anne-Gaelle Colom](https://github.com/agcolom)**, Leader of the documentation within the jQuery-mobile team. She ensures that documentation will be up-to-date. Issue we inspected related to her are <a href="#4311">#4311</a>.
- **[Todd Parker](https://github.com/toddparker)**, Lead of the jQuery Mobile team. He publishes posts on the official [JQuery-Mobile website]( http://jquerymobile.com/blog/author/todd/) about new releases of JQuery-Mobile. Related inspected issues: <a href="#3771">#3771</a>,<a href="#5167">#5167</a>, <a href="#2865">#2865</a>. 


### System administrators
Rozanski & Woods' definition:
> Run the system once it has been deployed. They focus on a wide range of concerns, such as system monitoring and management, business continuity, disaster recovery, availability, resilience, and scalability.
>

System administrators ensure that once the system has been deployed, it continues running as it should be. Moreover, they ensure that the business goals and ideals are reached and maintained. System administrators take a very high level overview and ensure the system is operating smoothly. In the case of jQuery Mobile, System administrators have to ensure that the library currently available for download is correct and will run smoothly. Apart from this, they have to ensure the jQuery CDN (Content Distribution Network) works adequately in order to allow users access to the library. In the case of jQuery mobile we identified three main individuals concerned with system administration:
-	**[Todd Parker](https://github.com/toddparker)**. Todd Parker is the jQuery Mobile team lead and in this role has a high level position in which he oversees the running and functioning of the jQuery Mobile library. He is one of the first people to step in if a distribution issues happens, or anything happens that may cause the library to be unavailable. Todd Parker is the direct link between the upper management layers and the developers.
-	**[Richard D. Worth](https://github.com/rdworth)**. As executive director of the jQuery foundation, Richard D. Worth is mainly concerned with the business concerns and ensuring that all requests and demands by users are met as well as possible. His system administration responsibilities lie mainly in ensuring business continuity for the entire jQuery foundation, of which jQuery Mobile is a part.
-	**[Dave Methvin](https://github.com/dmethvin/)**. Dave Methvin is the president of the jQuery foundation and as such occupies a similar position to Richard D. Worth within the system administration entity. Together, they assess problems and issues and delegate to team leads such as Todd Parker if something needs to be fixed or changed.

### Testers
Rozanski & Woods' definition
> Test the system to ensure that it is suitable for use. 
>

Within any substantial project testing is a very important element. Developers may come up with fantastic new ideas, but may inadvertently and unwittingly break other functionality within the library. In order to prevent situations like this, projects have testers. In the case of jQuery Mobile there are no dedicated testers for this specific project. Rather, there are a number of testers within the jQuery foundation who are responsible for testing all projects operated by the foundation. Within jQuery, a custom JavaScript unit testing framework has been developed, qUnit, which is used for unit testing all projects. In fact, qUnit is used to unit test new builds of qUnit itself (http://qunitjs.com/). A number of important individuals within the jQuery foundation with regards to testing can be identified:
-	**[Jörn Zaefferer](https://github.com/jzaefferer)**. Jörn Zaefferer is testing lead within the jQuery foundation and in this role he oversees all testing activities for all libraries of the jQuery foundation, including jQuery Mobile. He also created qUnit (jQuery's JavaScript testing framework) and maintains it. This testing framework is now used by many other organizations to execute unit tests for their JavaScript code.
-	**[Mike Sherov](https://github.com/mikesherov)**. Mike Sherov is involved in development and testing efforts across multiple jQuery projects
-	**[James M. Greene](https://github.com/JamesMGreene)**. James M. Greene is a tester with the jQuery foundation, testing all jQuery projects, including jQuery Mobile.
-	**[Timo Tijhof](https://github.com/Krinkle)**. Timo Tijhof is a tester with the jQuery foundation, testing all jQuery projects, including jQuery Mobile.
- **[Jasper de Groot](https://github.com/uGoMobi)**, member of the jQuery Mobile team. He's active on Github and maintains the repository. He reference to other issues within the repository, closes issues. In this way he maintains the repository. Related issues: <a href="#3956">#3956</a>, <a href="#3577">#5167</a>, <a href="#4311">#4311</a>, <a href="#5113">#5113</a>.


### Users
Rozanski & Woods' definition:
> Define the system’s functionality and ultimately make use of it. Their concerns obviously center around scope and functionality of the system. 
>

Last, but certainly not least, the users of the system. Eventually this is what the project should be about. This group of stakeholders is the group for which the system is being developed (or at least, we should hope so!). In the case of jQuery Mobile, the direct users of the library will be mobile web developers. Indirectly, the general public will also be users, but they generally are unaware of the fact that they are making use of the library. Mobile web developers have very specific needs and demands and as such will be very critical and skeptical of changes. The development team will need to ensure that whenever new functionality is added, old functionality is not broken in order to keep users satisfied. The list of users that can be identified is virtually endless. jQuery Mobile identify a number of users on [their own website](http://jquerymobile.com/). We list a limited number of users here:
-	**[Kris Borchers](https://github.com/kborchers)**. Kris Borchers is a developer within the jQuery UI team who, according to his own website, has recently taken up mobile development with jQuery Mobile.
-	**[Mobile Professionals](http://mobpro.com/)**. MobPro, among other activities, creates mobile websites for advertising campaigns for various clients. These websites make use of the jQuery Mobile library. An example is http://mbbestelwagens.nl/
-	Other developers, similar to Mobpro, building upon the jQuery Mobile framework.


# Stakeholder analysis based on issues

In order to identify the stakeholders based on analyzing the issues, we first used the most commented issues. The issues with the most comments could give a useful insight in the stakeholders involved with jQuery mobile. We determined the participated users of the top-20 issues. After that we summed the participation of each of these users for every issue. The results are shown in the figure below:
 
![table_issues](https://f.cloud.github.com/assets/4234312/479910/265c3a22-b820-11e2-820a-501fb634c573.png)

Based on the results we can conclude that @uGoMobi and @toddparker are the most participated to the issues.

After that, we figured that it would be more useful to use the most commented issues with the highest priority. We calculated the participations in the same way as before and came up with the results presented below:

![table_high_priority_issues](https://f.cloud.github.com/assets/4234312/479911/2944a616-b820-11e2-927a-b1ebe4aa46bb.png)
 
As in the first case, @uGoMobi and @toddparker seems to participate the most. Out of the 91 participations, the 12 presented users participates the most and gives a quantitative overview of the most involved stakeholders. 

To obtain a better overview of the stakeholders we had to analyse the issues individually. For each users/stakeholder contributing significantly, we analysed its role/class. 
The issues we analysed are respectively obtained from [issues](https://github.com/jquery/jquery-mobile/issues?direction=desc&labels=4+-+High&sort=comments&state=open ).


# Issues

## <a name="4024">[#4024](https://github.com/jquery/jquery-mobile/issues/4024)</a>
-  @uGoMobi introduces the problem (he opened the issue), he managed the issue by closing and opening it. By introducing the problem with in depth code, it seems obvious that he is a **developer**.
-  @elfgoh is a **developer**, based on his input. He also gives useful information how to solve this issue: “a quick fix is to…”, indicating that he is also an **supporter**.
-  @paragon-creations is a **developer/supporter**. He has enough background information and is willing to come up with solutions: “I think I just found a temp workaround” and “You can solve this temporarily”
-  @toddparker could be one of the leading characters based on his activities. “Hi al - we're looking into this”, and status overviews about the issue would suggest that. Also a sentence like “So, feel free to add this because it can improve rendering quite a bit, but test thoroughly and know the risks.” points to a stakeholder with overview, a manager **developer**. He also seems to have significant background information.
-  @tegansnyder is a **user** experiencing the same problem. He is also a **supporter** with respect to other users responding to this issue: “@daveheadspace excellent! glad I could help”. He could also be a **tester**: “I can confirm that Scott's additions work. I just tested using the latest build unstructured css”.
-  @dcarrith is a **tester** (“While testing in my Phonegap app…”) and a **developer** (“I'll definitely try out the .ui-page-pre-in opacity tweak”).
-  @scottjehl is a **developer** (“After a lot of tinkering tonight, the following commit seems to do some good, at least in Fade transitions on my iOS5 device”), but also a **supporter** (he is appreciated by @toddparker: “Awesome work by @scottjehl”)
-  @3drockz experiencing the same issue and is willing to help solving the problem: “I read almost every blog/forum regarding this issue…”, he is **supportive** to find problems related to this issue: “@toddparker Every transition feels broken, more than the transition smoothness, its the jumping in longer pages”
-  @zsprawl is a **supporter** and a **developer**, he comes up with a solution: “I fixed the issue at least for me…”
-  @wturnerharris is a **user** and a **tester**: “My test device is the nexus s 4g…”
-  @alexksso is a **user** with the same problem (“I do have this issue too :/”) and is a **supporter** to other users (“The "monkey-patch" from @alexksso helped me a lot for slide transitions.”)
-  @jjstafford is an example of someone who doesn’t participate in the discussion too much but nevertheless provide a very useful solution to the issue: “I've found a nice combination that works for me.”, he is a **supporter** and **developer**.
-  @Hemant-Patil is a **supporter** (“We have made few changes to JQM code and it seems to be working fine for us”) and appreciated by @uGoMobi: “Thanks for posting your solution!”). 
-  @Tomeor is a **supporter** and came up with a solution “Setting this in my main css solved the problem !!!”
-  @doom777 is a **supporter**: “Ok, I got it! Make sure your meta viewport tag matches the following regex”

The remaining unnamed users that participate in this issue are mainly users who came up with the same problem or derived a problem after some testing but didn’t have significant influence with respect to the issue.

## <a name="3956">[#3956](https://github.com/jquery/jquery-mobile/issues/3956)</a>
-  @uGoMobi introduces the problem (he opened the issue). By introducing the problem after some testing, it seems that he is a tester. He is also a **developer** and a **supporter** (“Just had a quick look at…”)
-  @webdpro is a **tester** (“In testing this seems to only happen…”) and **developer** (“I have recreated the css…”), he is also an **supporter** (“After doing more research on it I found that”)
-  @juleq is a **tester**, because he is tracking down the problems according to this issue (“The contents of the affected pages is as follows”)
-  @toddparker is the leading figure, a manager **developer** (“Can someone post up a test page using latest so we can give this a look? ”, “We do have a fix to…”)
-  @triwav experiences the same problems, he is a **tester** and a **user** (“Not sure if this is the exact same issue but it's most likely related”, “My mobile app is located her”)
-  @BeerSmith is a **supporter** and **developer**; he comes up with a solution (“Adding this (forcing resize of headers) at the top of your javascript worked for me.”)

The remaining unnamed users are mainly users who came up with the same problem or derived a problem after some testing but didn’t have significant influence to take them into account.

## <a name="3577">[#3577](https://github.com/jquery/jquery-mobile/issues/3577)</a>
-  @uGoMobi introduces the problem (he opened the issue). By introducing the problem after some testing, it seems that he is a **tester**. He is also a manager **developer**, because he gives an overview of the issue on the way.
-  @kurteknikk is a **supporter** (“We can always use !important to force”)
-  @gabrielschulhof is a **supporter** and a **developer** (“This can be solved by properly implementing the widget() method on our widgets…”)
-  @arschmitz is a **supporter**; he gives his input in the questions asked by @uGoMobi
-  @MauriceG is a **supporter**; he gives his input by adding some useful references

## <a name="5659">[#5659](https://github.com/jquery/jquery-mobile/issues/5659)</a>
-  @frequent introduces the problem and seems to be a **tester** or **user**, he found out a problem, which is marked as bug by @uGoMobi
-  @uGoMobi is a team member of jQuery Mobile, he is a **developer**. He agrees with the issue detected by @frequent and mentions to try to resolve the bug for one of the next revisions of the system (“The missing refresh method can be considered as a bug so let's try to get this in 1.3.1”)

## <a name="1373">[#1373](https://github.com/jquery/jquery-mobile/issues/1373)</a>
-  @jblas is a jQuery team member; he wants a certain functionality before they hit the beta. It seems like he is a **developer** with a managing role.
-  @scotjehl responds to this by involving with the discussion. He wants to be sure whether the issues block the beta. It seems like he is one of the members too, with a **developing** role. 
-  @toddparker intervenes by moving these issues to a next version. He is most likely one of the managing **developers**.

## <a name="4311">[#4311](https://github.com/jquery/jquery-mobile/issues/4311)</a>
-  @evgenyneu has opened this problem. As a **developer** he has a problem with his implementation. 
-  @agcolom is a **supporter**, she tries to provide a solution by linking to documentation.
-  @uGoMobi and @toddparker are both **tester** and as well as **developers**; they provide their views on the problem. 
-  @MauriceG is a **tester**, since he tested the problem. 
-  @miketaylr is a **developer** of Opera, he tries to provide a solution.

## <a name="3771">[#3771](https://github.com/jquery/jquery-mobile/issues/3771)</a>
-  @phillpafford introduces the problem, where he as a **developer** shows to have a problem with an update. 
-  @johnbender is also a **developer**, since he also is familiar which suggestions are mentioned within the code comments.
-  @toddparker is a **supporter**; he tries to provide a solution and asks if another developer could solve this problem.
-  @jakeboone02 is a **developer**, he solved a part of the problem. 
-  @agcolom is a **communicator**, she updates documentation according to he made changes.
-  @istrasoft and @ Palestinian are **developers**; they have a problem with the code.  

## <a name="5167">[#5167](https://github.com/jquery/jquery-mobile/issues/5167)</a>
-  @uqpik opened this issue, where he would like to have a specific functionality to be supported. So he is a **user**. The same goes for @Fady1956 and @skoant, they would also like to have this support. But @Fady1956 is also a kind of supporter, since this user also tries to contact someone who can support the problem. 
-  @toddparker is a **supporter**; he tries to provide a solution. 
-  @uGoMobi is a **supporter** and **developer**; he links other issue to this issue and point out an issue which should also be taken into account.  

## <a name="3415">[#3415](https://github.com/jquery/jquery-mobile/issues/3415)</a>
This issue seems to be an issue between a group of developers who are working on the same issue, and where they discuss how to solve this.
-  @scottjehl opened the issue, where he discusses a design issue with other assigned users. Thus he is a **developer**. 
-  @jblas is also a **developer**, he agreed with the design scott provided. 
-  @frequent is also a **developer** but also a **tester**, he provided a temporary solution. 
-  @johnbender is also a **developer**, since he also is familiar which suggestions are mentioned within the code comments. 

## <a name="3863">[#3863](https://github.com/jquery/jquery-mobile/issues/3868)</a>
-  @adammessinger Opened this issue, where provides a solution to help others who are having positioning problems. So he seems to be a **developer** as well as a tester. He tested the his solution on different browser.
-  @uGoMobi is a **supporter**, because he referenced this issue within another issue, because this issue might provides an good solution to solve the problem in that issue. 
-  @arschmitz is a **tester** as well as a user, he tested on a device and couldn’t reproduce the same problem.

## <a name="1579">[#1579](https://github.com/jquery/jquery-mobile/issues/1579)</a>
* @jammus reports the issue, along with considerable detail. Further on, he continues to interact when people try to help or propose solutions. Therefore, he can be considered a **user**, as he is trying to use the library.
* @jblas initially tries to clarify the issue. Following this he notes that the jQuery Mobile development team had some trouble that particular morning. He is a **developer**.
* @jcorporation thinks he recognizes the issue but is mistaken. He is a fellow **user**.
* @hakanson similarly tries to link the issue to other known problems. His suggestions seem to help more. He seems to have considerable in depth information, so he could be a **developer** or a well-informed **user**.
* @mfkahn supplies a previously given solution. This seems to work. He is a fellow **user** and here a **supporter**.
* @toddparker is a **communicator** here. He checks in to ascertain the status of the issue. Furthermore, he assigns @johnbender to the issue to solve it.
* @johnbender is a **developer** assigned to solve this issue by @toddparker
* @aiwiliams is a **user** attempting to use the proposed workaround but not succeeding. @jammus helps him. Following this @toddparker proposes closing the issue, but both @johnbender and @jammus object.
* Following this, a number of **users** report having the same problem: @mattberg, @nimy, @PlippiePlop, @mdempfle, @ryanmc2033, @frequent, @ryanilg, @webslash, @bmccalle-1982


## <a name="4698">[#4698](https://github.com/jquery/jquery-mobile/issues/4698)</a>
* @cannona reports the issue, clearly stating what the problem is. He is a **user**.
* @scottjehl provides an initial indication as to what may be the problem, but asks for more input from other developers and users. He is a **developer**.
* Following @scottjehl's request for input, @uGoMobi responds by clarifying what the meaning of the data-role="button" is within the library. He seems to be the person responsible for developing this particular aspect of the library. He is a **developer** and a **maintainer**.
* @vick08 is a **user**, who expands the issue to include other types of buttons within the library. He therefore widens the issue, and creates a discussion with @uGoMobi as to what the general idea should be and what changes possibly should be made. @uGoMobi then indicates the development team will look into the issue for the next release.


## <a name="5475">[#5475](https://github.com/jquery/jquery-mobile/issues/5475)</a>
* @hf35 is a **user** reporting a problem with swiping on Windows Phone.
* After the initial question, @uGoMobi asks @hf35 to clarify the issue somewhat. In this discussion he is being a **communicator** as he is asking @hf35 to supply more information. Following this he tries to contact a **developer** @wilto to investigate the issue.
* @FLasH3r is a **user** reporting the same problem as @hf35.
* @arschmitz is a **developer** who indicates that they are aware of the issue, but have made a conscious decision not to focus efforts on solving the problem. The problem seems to be with Windows Phone's non-compliance with touch standards.


## <a name="3750">[#3750](https://github.com/jquery/jquery-mobile/issues/3750)</a>
* @ryanmc2033 is a **user** who has encountered a functionality that he feels is lacking in the jQuery Mobile library.
* @toddparker responds as a **developer** by indicating he would like to see this functionality included too. He assigns @uGoMobi to the issue to solve it.
* @uGoMobi is a **developer** tasked with solving the issue.
* @dcarrith is a **user** and **supporter** who wrote his own code as a temporary workaround for the problem. Sadly he does not supply the actual code so @ryanmc2033 can mnake use of it while he awaits the new version of the library.


## <a name="5173">[#5173](https://github.com/jquery/jquery-mobile/issues/5173)</a>
* @scottjehl introduces the issue as a **developer**. He proposes the team address the issue for the next major release.
* @toddparker acts as **communicator** by indicating the issue is important, but moves the solving of it to a different release, so as to group all HTML and CSS changes there.
* @pillex and @woutervanwijk respond to the initial issue by indicating that they completely agree with @scottjehl's observations. They are users, who are noting their support.
* @uGoMobi references this issue multiple times. He is a **developer** who is busy investigating this issue and how to solve it.


## <a name="2661">[#2661](https://github.com/jquery/jquery-mobile/issues/2661)</a>
* @jblas opens the issue, he suggests a 'new' functionality for the jQuery Mobile.
_“What we really need is a mobileinitcomplete or mobileready event to tell folks the framework is initialized and ready to go”._
Later on he also provide more in-depth information what's going on and what problems arise with this. 
Based on this he's a **developer**, he talks about folks and developers who encounter this problem, and suggest a 'solution'. Also because he's assigned to the issue, he is a developer.
* @scottjehl, only asks a question in this issue to understand the problem better, _“this is before the first pagecreate, or..?”_ Because @toddparker later on asks @scottjehl to contribute, @scottjehl is also a **developer**.
* @toddparker asks the following: _“@scottjehl - Mind weighing in here?”_ He asks others to do things, so he has a leading function, a manager **developer** role. 
* @uGoMobi acts like a **communicator** in this issue. He asks more information about the difference between mobileready and pageinit.
* @pillex explains to @uGoMobi what probably is the difference between those two events. He is a **supporter**, but because he's not sure about his suggestion, He is also a **user**, because he explains his problem he encounters within this issue.
* @arschmitz asks for more information about the 'problem' pillex has, so arschmitz is a **supporter**.


## <a name="2865">[#2865](https://github.com/jquery/jquery-mobile/issues/2865)</a>
* @toddparker opens the issue. Because his in-depth explanation about the problem, that they're _“missing a bit of logic for this scenario”_ he is a **developer**. He is also a **supporter** because if references to another issue that looks the same.
* @MauriceG is a **tester** because he says he tested the docs for titling. He also referenced to a pull request he made by himself about a similar problem.
* @gseguin is also a **tester**. He made a pull request but he had to revert it because it broke some tests.
* @yuripave is a **user** because he have some problems in his jquery mobile web app. He provides information about the problems he encounters.
* @gabrielschulhof provides more information to the user @yuripave. He explains some things and therefore he's a **supporter**.
* @uGoMobi acts like a **maintainer** in this issue. He had changed the title of the issue, closed some other issues so in this way he maintains the github repository. He also mentions it is still an issue in the latest and it would be cool to fix it, so he's also a **developer**.


## <a name="5113">[#5113](https://github.com/jquery/jquery-mobile/issues/5113)</a>
* @uGoMobi opens the issue and provide some test cases where the issues arise. So he's a **tester** in this issue. After a commit made he comes up with another issue that arises with the getInheritedTheme. He is also a **developer** because later on he talks about that issue is resolved, but there is also a new issue again.
* @gabrielschulhof comes up with another problem. Because he explains when the problem arise and knows things about the jQuery Mobile he's a **developer**. He's also a **supporter** because he provides more information about the problem, give some examples with these problems.
* @scottjehl talks about they have the same problems in jQuery UI. He is a team member of jQuery and based on his comment, he is a **developer**. He doesn't provide a solution, but he gives suggestions for better working in the future.
* @toddparker agrees with @scottjehl and tells they “have to reconsider the complexity and move away from this at some point”. He has a managing **developer** function in this issue.


## <a name="3978">[#3978](https://github.com/jquery/jquery-mobile/issues/3978)</a>
* @johnbender is a **developer**. He opens the issue by referencing another issue, and he created a branch:
_"I've created a branch that allows for the disabling of the base rewrite as a first step toward the broader solution of allowing the linked documents to define their own base."_
Because @toddparker also asks if this problem is still on @johnbender his radar, he is a developer.
* @uGoMobi is in this case a **supporter** and a **maintainer**. He's a supporter because he references to a ticket and asks @johnbender and @jblas to review this. He also refers to another issue. He's a maintainer because he maintains the github by updating the milestones in this issue.
* @toddparker is again the manager **developer**. He wants to know if the problem is still under @johnbender his radar, he wants to know if he's still working on this.

## <a name="3414">[#3414](https://github.com/jquery/jquery-mobile/issues/3414)</a>
* @scottjehl opens this issue. He talks about a problem and later @agcolom asks him if he already did something with this. So in this case @scottjehl is a **developer**.
* @agcolom talks about: _"As a user, I am happy enough for now to click 1, click 2 quickly and get page 1 and then page2 without having to go back and click 2 again."_
She is more than only a user, but in this issue she talks about there own use and if she finds this a 'problem' so she is in this case just a **user**. She doesn't provide any solutions or suggestions.
* @uqplk is a **developer** and **user** of the jQuery Mobile library. He provides a "work-around" he uses to prevend the interaction during a request in progress. So that's why he's a developer. He's also a user because he provide a solution, but this is just something he uses for himself to provide other users of his builded system (web-app or in-app). So in this case he's just a user of the jquery mobile library.

## Activity contributors github repository 

As you can see in the analysis discussed above, [Todd Parker (@toddparker)](https://github.com/toddparker), [John Bender (@johnbender)](https://github.com/johnbender) and [Jasper de Groot (@uGoMobi)](https://github.com/uGoMobi) are active in a lot of issues. 
But they're not only active with comments in issues. They are big contributors to the jQuery Mobile repository.
Looking at the **[Contributors](https://github.com/jquery/jquery-mobile/contributors)** on github, this is are the 5 highest contributors, based on their commits, since the start of the repository, September 5th 2010:

### John Bender

![1_john_bender](https://f.cloud.github.com/assets/4237293/492836/7f6be788-baf6-11e2-9c82-85967af21d55.png)

[@johnbender](https://github.com/johnbender) contributed the most since the start of jQuery Mobile. As you saw before he's active in many issues, active in most commented issues, but not as active as @toddparker and @uGoMobi.

### Jasper de Groot

![2_jasper_de_groot](https://f.cloud.github.com/assets/4237293/492840/4926d380-baf7-11e2-9509-cd407c292780.png)

[@uGoMobi](https://github.com/uGoMobi) is the second in the list. But as you can see directly, he contributes more the last year then number 1, @johnbender. This because @uGoMobi only started in 2012 contributing to jQuery Mobile. Still ending second in this list means he's doing a lot of work for jQuery Mobile in this last year. 

### Gabriel Schulfhof

![3_gabriel_schulhof](https://f.cloud.github.com/assets/4237293/492844/dbd04ae0-baf7-11e2-92b3-ab0bb7b4d911.png)

[@gabrielschulhof](https://github.com/gabrielschulhof) ended third. He isn't mentioned explicitly in the list above, but in the Issue Analysis he comes forward a couple of times. (<a name="2865">[#2865](https://github.com/jquery/jquery-mobile/issues/2865)</a>, <a name="3577">[#3577](https://github.com/jquery/jquery-mobile/issues/3577)</a>, <a name="5113">[#5113](https://github.com/jquery/jquery-mobile/issues/5113)</a>)
As you can see he joined halfway, somewhere in the end of 2011 and contributes some less then @uGoMobi and some of the same amount as @johnbender. But because @johnbender is working a lot longer on jQuery Mobile, @gabrielschulhof only ends on the third place.

### Ghislain Seguin

![4_gseguin](https://f.cloud.github.com/assets/4237293/492861/335382b8-baf9-11e2-8d16-ba99ac05f336.png)

[@gseguin](https://github.com/gseguin) participates longer then @gabrielschulhof and @uGoMobi, but as you can see he has less commits. In the 20 discussed Issues, he was only active in one, <a name="2865">[#2865](https://github.com/jquery/jquery-mobile/issues/2865)</a>. In this Issue he comes forward as a tester, but because of his relatively large contribution he also can be seen as a developer.

### Todd Parker

![5_todd_parker](https://f.cloud.github.com/assets/4237293/492867/1cf28a90-bafa-11e2-888a-c14a28125a38.png)

[@toddparker](https://github.com/toddparker) is the 5th high contributor to the jQuery Mobile repository. He's active since almost the beginning but has less commits each time compared to the others. This can be the case because he's the lead of jQuery Mobile and therefore delegate tasks.

#### amount of addition and removal
The list above is based on the amount of commits, not on the amount of additions (++) /deletions (--) of lines. If you'll look at that the list will drasticly change:
* Todd Parker (480,727 ++ / 630,002 --)
* Ghislain Sequin (216,010 ++ / 184,105 --)
* Jasper de Groot (178,555 ++ / 230,273 --)
* John Bender ( 82,443 ++ / 85,532 --)
* Gabriel Schulhof (42,661 ++ / 35,194 --)

So Todd Parker maybe have less commits then the others, the commits he does are much larger then other commits. 

#### jQuery Statistics last month
In the following figure you can see the statistics of last month activity on github:

![activity_last_month](https://f.cloud.github.com/assets/4237293/492874/64ebff42-bafb-11e2-8d06-19b4a150aeea.png)

As you can see, 4 out of 5 listed as highest contributors are highly active last month:

* @uGoMobi, 212 commits
* @gabrielschulhof, 94 commits
* @johnbender, 65 commits
* @arschmitz, 23 commits
* @gsequin, 7 commits.

@arschmitz isn't mentioned in the high contributors list, but he's active in the issues. (<a name="3577">[#3577](https://github.com/jquery/jquery-mobile/issues/3577)</a>, <a name="3863">[#3863](https://github.com/jquery/jquery-mobile/issues/3863)</a>, <a name="5475">[#5475](https://github.com/jquery/jquery-mobile/issues/5475)</a>, <a name="2661">[#2661](https://github.com/jquery/jquery-mobile/issues/2661)</a>)
He is listed on the 11th place of contributors, as you can see here:

![11_arschmitz](https://f.cloud.github.com/assets/4237293/492878/a71266bc-bafc-11e2-8942-733f94a545f2.png)

The reason why he ended this 'low' is because he's only active since the end of 2012, so he can't have that many contribution yet.
[Alexander Schmitz (@arschmitz)](https://github.com/arschmitz) will end higher if he keeps contributing to the jQuery Mobile repository.
