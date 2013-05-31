# Context View 
jQuery Mobile is a touch-optimized web framework (additionally known as a JavaScript library or a mobile framework) currently being developed by the jQuery project team). The development focuses on creating a framework compatible with a wide variety of smartphones and tablet computers.


From Rozanski & Woods:

> #### Definition 
> Describes the relationships, dependencies, and interactions between the system and its environment (the people, systems, and external entities with which it interacts). It defines what the system does and does not do; where the boundaries are between it and the outside world; and how the system interacts with other systems, organizations, and people across these boundaries. 

> #### Concerns
>
  - system scope and responsibilities
  - identify of external entities and services and data used
  - nature and characteristics of external entities
  - identity and responsibilities of external interfaces
  - nature and characteristics of external interfaces
  - other external interdependencies
  - impact of the system on its environment
  - overall completeness, consistency, and coherence  

> #### Models 
> Context model, interaction scenarios

> #### Problems and pitfalls 
> 
  - Missing or incorrect external entities
  - missing implicit dependencies
  - loose or inaccurate interface descriptions
  - inappropiate level of detail
  - scope screep
  - implicit or assumed context or scope
  - overcomplicated interactions
  - overuse of jargon

> #### Stakeholders 
> All stakeholders, but especially acquirers, users, and developers

To create the Context Mmdel we are using the approach mentioned by Rozanski & Woods:
- Review the goals of system
- Review key functional requirements
- Identify the external entities
- Define responsibilities of external entities
- Identify the interfaces bwtween system and each external entity
- Identify and validate the itnerface definitions
- Walk through key requirements
- Walk through scenarios or use cases 

## System scope and responsibilities
This concern considers the main responsibilities of jQuery Mobile. With other words it describes what jQuery Mobile is required to do.
According to the official [jQuery Mobile website](http://jquerymobile.com/strategy/) the strategy is:
> Delivering top-of-the-line JavaScript and a unified User Interface across the most-used smartphone web browsers.

### Key Funtional requirements
The key functional requirements of jQuery Mobile.

- jQuery Mobile must be compatabile with several platforms (devided in priority groups) [link](http://jquerymobile.com/gbs/)
- jQuery Mobile ensures upscaling to every screen
- Build on jQuery core to preserve learning curve of those users already familiar with jQuery
- jQuery Mobile must be very lightweighted (to optimize speed and minimize mobile network usage)
- jQuery Mobile enables HTML5-driven configuration
- Ajax-powered navigation with animated page transitions
- jQuery Mobile enables UI widgets that are touch-optimized

## Identity of External entities and services and data used
Here comes the identification of entities with which the system needs to interact and their relevant responsibilities.
Moreover we also discuss the service and data used in jQuery Mobile.

- Internal systems, system that run in the same organization:
   - [jQuery](http://jquery.com/)
   
- External systems, systems that run in another organization:
   - [Google Maps](http://code.google.com/p/jquery-ui-map/)
   - [PhoneGap](http://phonegap.com/)
   - [IBM Worklight](http://www-03.ibm.com/software/products/us/en/worklight)

## External Interface
Identify interface with each external entity that are relevant for our system.
 
- Data provider or consumer
- Service provider or consumer
- Event provider or consumer

## Other external interdependencies
This section describes other external interdependencies which are relevant for our system.

## Context Model
From Rozanski & Woods:
> The context model is the main architectureal model within the Context view and often the only one produced. It places the system clearly in its encironment and relates it to the external entities with which it interacts, via explicit relationships that represent the interfaces to and from it.

The purpose of this Context model is to explain what jQuery Mobile does and does not do, to present an overal picture of the system's interactions with the outside world, and to summarize the roles and responsibilities of the participants in these interactions, 

The following type of elements should be included in the model:
- The system itself
- The external entities
- The interfaces between the system and external entities
   - For each external interface capture an overview of:
      - expected interactions
      - semantics of the interface (i.e data exchanged and it's meaning)
      - exception processing approach
      - key quality properties


