---
title: 'Microservicios y Arquitectura Orientada a Eventos'
date: '08-07-2020 16:00'
author: 'Joel Ganggini'
continue_link: true
hero_classes: 'text-light title-h1h2 overlay-dark-gradient hero-large parallax'
taxonomy:
    category:
        - blog
    tag:
        - PI3
        - ARQUITECTURA-DIGITAL
        - WORKSHOP
        - INTEGRACIÓN
        - FASTDATA
header_image_alt_text: Mountains
---

[plugin:youtube](https://youtu.be/OSxkhEG5xwI)

La arquitectura de microservicios es una aproximación para el desarrollo de software que consiste en construir una aplicación como un conjunto de pequeños servicios, los cuales se ejecutan en su propio proceso y se comunican con mecanismos ligeros.

===

#### Temas
------

* **El origen**
  * Microservicios como forma de modularidad.
  * Base de datos por servicio.
  * Problemas con la descomposición.
* **Comunicación en Microservicios**
  * ¿Qué mecanismos de comunicación usar?
  * Mensajes
  * API de servicio asíncrono
  * Message Broker
  * Librerías y Framework
* **Saga**
  * Patrón
  * Eestructura
  * Coreografía
  * Orquestamiento
  * Pérdida del aislamiento
  * Eventuate Tram Sagas
* **Dominios**
  * DDD: Domain Driven Design
  * Patrón Aggregate
  * Patrón Domain Event

* **Event Sourcing**
  * Problemas con la persistencia tradicional
  * Patrón Event Sourcing
  * Beneficios y Desventajas
  * Event Store

* **CQRS: Consultas con Microservicios**
  * Patrón API Composition
  * Patrón CQRS
  * CQRS con Event Sourcing

#### Arquitectura orientada por eventos
------

Una arquitectura orientada por eventos es un patrón de diseño el cual permite a un conjunto de sistemas comunicarse entre si de forma reactiva mediante la publicación y el consumo de eventos, los cuales se pueden interpretar como cambios de estado de objetos.

![Image for post](https://miro.medium.com/max/618/1*ioQtOgLxsvIRaxQ8Qnhrqg.png)