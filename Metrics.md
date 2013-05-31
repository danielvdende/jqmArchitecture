# Metric Assignment 
In this document we describe the [Goal Question Metrics approach](http://en.wikipedia.org/wiki/GQM) for jQuery Mobile. We used the GQM approach proposed by [Basili et al.](http://fub-taslim.googlecode.com/svn/trunk/WEMSE/INSTICC_Conference_Latex/gqm.pdf). 

First we formulate the goal of our project, then we identity three questions for this goal. Accordingly, we identify two metrics for each of these question, which also covers a 
description of the entities, attributes and mapping, as Eric Bouwers explained in the [lecture](https://github.com/delftswa/lectures/blob/master/05-2-metrics-lecture1.pdf). 

The original assignment:
>Study the Goal Question Metric approach, and use the GQM format in order to
> -   Formulate a goal
> -   Identify 3 questions with this goal
> -   Identify 2 metrics per question (covering a description of the entities, attributes and mapping)

## Goal Question Metric Approach
According to the [paper](http://fub-taslim.googlecode.com/svn/trunk/WEMSE/INSTICC_Conference_Latex/gqm.pdf ) proposed by Basili et al. the resulting measurement model has three levels:
 1. Conceptual level(Goal), this level focusses on formulating a specific goal for an object. Object of measurements are Products, Processes or Resources.   
 
 2. Operational level (Question), in this level questions are used to characterize the way the assesment/achievement of the formulated goal is going to be performed. 
  
 3. Quantitative level (Metric), contains a set of data that is associated with every question in order to answer it in a quantitative way. A set of data can be objective, or subjective. Objective data only depends on measure object not the viewpoint, while subjective data depend on the viewpoint as well as the object that is being measured.

## Goal

Goal | Description | 
--- | -----
Purpose: | To decrease
Issue: | the execution time (speed)
Object (product): | of jQuery Mobile
Viewpoint: | from the viewpoint of the (lead) developer(s)

*To decrease the execution time (speed) of jQuery Mobile from the viewpoint of the (lead) developer(s).*

On their own website, the jQuery Mobile team note that lightweight size and minimal image dependencies for speed  is one of their most important [features](http://jquerymobile.com/demos/1.2.1/docs/about/features.html). Speed is a very important for any web based entity, but even more in the case of the mobile web, where the network and device speed/quality may vary greatly. Therefore, we want to investigate whether this speed goal is achieved and possibly contribute to the project to improve this feature. The goal described above is a mapping of the lightweight size feature described by the jQuery Mobile team, but we intend to keep the device and network speed/quality constant to ensure accurate results.

### __Q1:__  What is the current execution time (speed) [issue] of jQuery Mobile [object] ?
In order to ascertain whether jQuery Mobile has achieved any performance improvement, we first need to define a base performance level at a specific point in time. This is point A(current) shown in the image below. We measure this performance level using a number of metrics, which we define here. The first four metrics involve measuring functions in the code itself. The latter two metrics are abstracted metrics that provide a better statistical insight into the data. 
#### M1: average LOC per function [quantitative metric]

  This metric gives an indication of the size of each function within jQuery Mobile. While it does not necessarily directly give an accurate representation of speed, function size may still be relevant when trying to optimize execution time. Longer functions that can possibly be split may, for example, execute unnecessary code which should be removed from that particular function.
* __Entity__: product(code). _This metric is a direct measurement of the actual code. So its entity is code._
* __Attribute__: internal (size). _This metric is an internal measure as it measures the internal code size._
* __Mapping__: average #LOC/#function. _We compute the average LOC per function to get an overall indication for the entire library_

#### M2: complexity: average McCabe per function

This metric gives an indication of the complexity per function. Once again, this complexity is an indirect measure, though can be quite accurate. Generally speaking, the more complex a function is, the longer the execution time will be. As such, we believe it is quite an effective measure when determining the execution time of the library.
* __Entity__: product(code). _The metric is a direct measurement of the code._
* __Attribute__: internal (structuredness). _The McCabe complexity says something about the structure within the code, namely the number of decision paths. Therefore it is an internal measure of structuredness._
* __Mapping__: average ( #number of decision paths). _We take the average in order to get an overall view of jQuery Mobile as a whole._

#### M3: Number of recursive functions
Besides standard iteration constructs within a code, recursion can also greatly contribute to the execution time. This recursion will not show up in the other metrics, as the same code is effectively used many times. In order to include the recursion within our metrics, we intend to count the number of recursive functions present in the code. The depth of the recursion is not included in this metric. We are of the opinion this may be very hard to measure, as this depth can vary greatly depending on the situation. The number of recursive functions gives some indication as to the level of recursion present in the code.

* __Entity__: product(code). _Once again this metric clearly is direct measurement of the code._
* __Attribute__: internal (structuredness). _This metric says something about the internal structure, namely the amount of recursive calls within the code._
* __Mapping__: count number of functions called within a function to itself. _We count the number of recursive functions in order to gain some insight into the level of recursion._

#### M4: average function execution time
This metric directly measures the execution time of each function. This gives a good indication of how good the overall execution time of the entire library is. We average each function's execution time in order to gain an overall view. While this metric may seem obvious and perfectly accurate, certain complexities within the code may not become apparent upon single execution of a function. Certain recursive or iterative steps may be executed less or more frequently than with average use.
* __Entity__: process(testing). _This metric is a testing metric, in which we record the execution time of each function._
* __Attribute__: internal(time). _It is an internal metric of time as we measure the time of the code execution._
* __Mapping__: Sum(execution time per function)/#function. _We compute the average execution time per function in order to gain a high level overview of the entire execution time._

#### M5: Standard deviation (when having multiple measures [at A and B on several platforms+devices] of M1,M2,M3, M4)
Having computed our metric values, it is important to determine how reliable these results actually are. We do this using the standard deviation of the metrics we discussed above. In this way, we can determine whether we have outlying results, which may be statistically inaccurate.
* __Entity__: product(code). _This metric is concerned with the code as the metrics of which we are computing the standard deviation are also._
* __Attribute__: external(reliability). _This metric gives an indication of the reliability of our metrics and therefore is an external attribute._
* __Mapping__:  ![sd](https://f.cloud.github.com/assets/4234312/507191/0f4327c0-bd6a-11e2-8115-ca90dff37930.png). 

#### M6: Average (when having multiple measures [at A and B on several platforms+devices] of M1,M2,M3, M4)
Similarly to M5, this metric is intended to compute an abstracted value of the metric results in order to get an insight into the overall reliability and values of the metrics described earlier.
* __Entity__: product(code). _Once again this metric is concerned with the product, namely the code._
* __Attribute__: external(reliability). _As with M5, this metric is intended to give an insight into the reliability of the metrics we intend to use._
* __Mapping__: sum{i:1,...,n} (Xi)/n. _We take the average of the values found for the metrics and get a single value for the execution time of the entire library._

### __Q2:__  Is the execution time (speed) [issue] of jQuery Mobile [object] decreasing [purpose] ?
To determine whether the execution time is decreasing, we need to compare the values for the same metrics at B(future) with the values at A(current). M7 focuses on the direct comparison of the results of the metrics involved, whereas M8 is concerned with determining how reliable these results actually are.

#### M7: compare measure A with B (for M1,M2,M3,M4,M6)
In order to determine whether the execution time is decreasing, we defined two points in time at which we compute the metrics we defined earlier. Having done this, we compare the measures with each other in order to ascertain whether the execution time has decreased in that period of time.
* __Entity__: process(testing). _This metric is part of the testing process._
* __Attribute__: internal( performance change over time ) . _This metric should be considered internal as it measures the rate of change of internal metrics over time._
* __Mapping__: if( valueA > valueB ) { return true; } else { return false; }. _If the metric values at point A are indeed greater than at point B, we can confirm that the execution time of the library is in fact decreasing._

#### M8: compare reliability measure  between A and B (for M5,M6)
Similarly to M7, we compare the values of the average and standard deviation between the aforementioned two points in time. In this way we get an insight into the external reliability of our metrics.
* __Entity__: process(testing). _We are testing a number of metrics, thus it is part of the testing process._
* __Attribute__: external(reliability, empirical). _This is an external metric determining the reliability of our other metrics (M1, M2, M3, M4, M6) over time._
* __Mapping__: if( AVG(valueA)-SD(valueA)>AVG(valueB)-SD(valueB) ) { return true; } else { return false; }. _Similarly to M7, we simply confirm the execution time has decreased if the values at time point A are larger than at time point B._

### __Q3:__  Is the improved/decreased execution time (speed) [issue] satisfactory (meeting the purpose) ?
Having determined whether or not the execution time has decreased, it is also important to ascertain whether or not this decrease meets the goals of the stakeholders, i.e. whether the decrease is satisfactory. The metrics we have decided on are purely subjective and qualitative. The stakeholders' opinions cannot be directly measured (at least not without mapping them to a scale).

#### M9: Meeting subjective judgement of the (lead) developer(s)
To determine whether or not the achieved execution time is satisfactory, the subjective judgement of the developers is necessary. The developers have inside knowledge of the code and in their role they can accurately judge whether there are any realistic possibilities for optimizing the code any further.
* __Entity__: external(usability). _This is a judgement of usability. The question is whether the developers consider the execution time satisfactory enough to ensure sufficient usability._
* __Attribute__: resources(Personnel/Teams) _This is a subjective measure based on opinions given by developers._
* __Mapping__: The (lead) developer(s) judges when the execution time (speed) of the product meets a certain subjective threshold to be satisfactory. 

#### M10: Empirical research about user's subjective judgement
We shouldn't just ask the developers of the code whether the execution time meets their standards. It is also important to determine whether the execution time meets the standards expected by the users. If the developers believe the code to have good execution time, but the users still think the code is too slow, users may try to find alternatives or be unhappy.
* __Entity__: external(usability). _This metric is concerned with usability as users may find the code unusable if execution time is too long._
* __Attribute__: resources(Personnel/Teams). _The users give their opinions in order to obtain a value for this metric._
* __Mapping__: Empirical research about user's experiences forms a threshold if the product's execution time (speed) is satisfactory. 

![goal_explanation](https://f.cloud.github.com/assets/4234312/506998/89953e1e-bd65-11e2-85d2-63183b50f4d2.png)

This figure explains the meaning of A and B discussed above. A means the value of M1/M2/M3 at time A and the same counts for B.
