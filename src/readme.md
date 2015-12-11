# Persistence

Persistence is the continuance of an effect after its cause is removed.

A Persistence Layer is a layer of system architecture that handles Persistence for an Application.

There are different types of Persistence that can be available to an Application.


### Permanent Persistence

Permanent Persistence is for data intended to exist for an indefinite period.

An implementation must store a provided data-payload indefinitely, or until a direct action is performed to remove the data.

Uses include databases of varying types.


### Temporary Persistence

Temporary Persistence is for data intended to exist for a short time only.

An implementation must store provided data until a specified time period has elapsed, and then remove the data.

Uses include sessions and cookies.


### Transient Persistence

Transient Persistence is for data intended to exist for a single application cycle.

An implementation must store provided data only until a second application cycle completes, and then remove the data.

Uses include flash messaging, utilising sessions and cookies.


## Unifying an API

To make a single implementation able to provide all aspects of Persistence to an Application, a unified interface and schema are required for performing operations.

This package is an attempt to deal with this.


## Installation

```
composer require embarknow/persistence
```
