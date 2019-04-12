# API 101 Workshop

[![HitCount](http://hits.dwyl.io/AlbertSuarez/api-101-workshop.svg)](http://hits.dwyl.io/AlbertSuarez/api-101-workshop)
[![GitHub stars](https://img.shields.io/github/stars/AlbertSuarez/api-101-workshop.svg)](https://GitHub.com/AlbertSuarez/api-101-workshop/stargazers/)
[![GitHub forks](https://img.shields.io/github/forks/AlbertSuarez/api-101-workshop.svg)](https://GitHub.com/AlbertSuarez/api-101-workshop/network/)
[![GitHub repo size in bytes](https://img.shields.io/github/repo-size/AlbertSuarez/api-101-workshop.svg)](https://github.com/AlbertSuarez/api-101-workshop)
[![GitHub contributors](https://img.shields.io/github/contributors/AlbertSuarez/api-101-workshop.svg)](https://GitHub.com/AlbertSuarez/api-101-workshop/graphs/contributors/)
[![GitHub license](https://img.shields.io/github/license/AlbertSuarez/api-101-workshop.svg)](https://github.com/AlbertSuarez/api-101-workshop/blob/master/LICENSE)

🍺 Code for API 101's workshop at HackNight Season I: Episode IV, a [Hackers@UPC](https://hackersatupc.org/) event.

## Introduction

This workshop has the goal of introducing the concept of the APIs and learning how to interact with them. In order to understand the concept of how generic the APIs are, we are gonna see different examples in different programming languages such as [Java](/java/README.md), [Javascript](/javascript/README.md), [PHP](/php/README.md), [Python](/python/README.md) or directly through the [Shell](/shell/README.md).

## Theory

### What's an API?

APIs, also known as Application Programming Interfaces, at their most basic level, allows applications to talk to other applications, but they are so much more than this when you begin to explore the world of APIs further.

You can consider an API as a *black box* where given some input you have some output, indepently of which programming languange you are using. At the end, it's a box anyways.

> The API is like an artist performing on stage, and its users are the audience.

RESTFul APIs are the most common in the current state of art of Computer Science. This kind of APIs uses [HTTP](https://searchwindevelopment.techtarget.com/definition/HTTP) requests to GET, PUT, POST and DELETE data. They use **GET** to retrieve a resource; **PUT** to change the state of or update a resource, which can be an [object](https://searchmicroservices.techtarget.com/definition/object), [file](https://whatis.techtarget.com/definition/file) or [block](https://searchsqlserver.techtarget.com/definition/block); **POST** to create that resource ; and **DELETE** to remove it.

### API endpoints

You can understand an endpoint of an API as an entry point into that mentioned black box. You call to that endpoint with some parameters, and magically this endpoints returns some cool data to use for your projects.

In order to understand how to use those endpoints, we have to know how an API is properly designed.

Let’s write few endpoints for an API that has **Companies** which has some **Employees,** to understand more.
`/getAllEmployees` is an API which will respond with the list of employees. Few more APIs around a **Company** will look like as follows:

- `/addNewEmployee`
- `/updateEmployee`
- `/deleteEmployee`
- `/deleteAllEmployees`
- `/promoteEmployee`
- `/promoteAllEmployees`

And there will be tons of other API endpoints like these for different operations. All of those will contain many redundant actions. Hence, all these API endpoints would be burdensome to maintain, when API count increases.

**What is wrong?** The URL should only contain resources(nouns) not actions or verbs. The API path`/addNewEmployee` contains the action `addNew` along with the resource name `Employee`.

**Then what is the correct way?**`/companies` endpoint is a good example, which contains no action. But the question is how do we tell the server about the actions to be performed on `companies` resource viz. whether to *add*, *delete* or *update*?

This is where the [HTTP methods](https://en.wikipedia.org/wiki/Hypertext_Transfer_Protocol#Request_methods) (GET, POST, DELETE, PUT), also called as verbs, play the role.

The resource should always be **plural** in the API endpoint and if we want to access one instance of the resource, we can always pass the id in the URL.

- method `GET` path `/companies` should get the list of all companies.
- method `GET` path `/companies/34` should get the detail of company 34.
- method `DELETE` path `/companies/34` should delete company 34.

Other RESTFul APIs prefers to design these paths using query parameters instead of having the `ID` in the path directly. Something like:

- method `GET` path `/companies?id=34` should get the detail of company 34.

### Query parameters / Body request / Headers

In order to specify the input of the black box, there are three ways for doing it. However, not all of them can be used in all the scenarios.

#### Headers

This kind of input can be used in the four HTTP methods. It's usually being used for security parameters or for configuring the request to the API.

#### Query parameters

This type of parameter is being used in the four types of the methods but not 100% recomended in POST. This input is always specified in the URL path directly. For example:

- **GET** `https://api.example.com/students?university=UPC&faculty=FIB` returns all the students from `UPC` university and the faculty `FIB`.
- **DELETE** `https://api.example.com/subjects?code=XC` deletes the subject with `XC` as code.

> **Note**: See that `&` character in the URL path is for concatenating multiple query parameters.

#### Request body

This kind of input is only allowed in POST and PUT methods. This is usually useful for letting the request know which data should be added or modified. There are a bunch of [different request bodies](http://www.iana.org/assignments/media-types/media-types.xhtml), where you can specify which one as a header using `Content-Type` parameter. Howerver, the most common one is `application/json`.

## Tools

### Postman

[Postman](https://www.getpostman.com/) is one of the most famous, if not the most, tools for firing requests to an API. It is very lightweight and fast. Requests can be organized in groups, also tests can be created with verifications for certain conditions on the response. With its features, it is very good and convenient API tool. It is possible to make different kinds of HTTP requests – *GET*, *POST*, *PUT* and *DELETE*. It is possible to add headers to the requests.

### RapidAPI

[RapidAPI](https://rapidapi.com/) is the biggest API markplace in the world. If you want to test a lot of APIs quickly then you are gonna find the tool very useful. With only one account you can setup thousands of APIs so much faster than doing it separetly one by one.

## Free-access APIs

To find a bunch of cool APIs in general, check out this [GitHub repository](https://github.com/toddmotto/public-apis) with an endless list of free-access APIs.

We are gonna use a bunch of them in this workshop in order to see how to interact with an API. See every programming language folder for see those examples.

## Authors

- [Albert Suàrez](https://github.com/AlbertSuarez)

## License

MIT © Albert Suàrez
