---
title: 'Migración Génesis Framework'
date: '12-08-2020 16:00'
author: 'Joel Ganggini'
continue_link: true
hero_classes: 'text-light title-h1h2 overlay-dark-gradient hero-large parallax'
taxonomy:
    category:
        - blog
    tag:
        - PI4
        - ARQUITECTURA-DIGITAL
        - WORKSHOP
        - FRONTEND
header_image_alt_text: Mountains
---

[plugin:youtube](https://youtu.be/mfxEK8mHj4s)

Detalle de la estructura y caracterices del <mark>Framework Génesis</mark> para para desarrollos backend. Proceso de actualización de la versión `1.2.5` a `1.3.5`.

===

#### Versión 1.2.5
------

**Estructura**

  1. Upgrade de [Sprint Boot](https://spring.io/projects/spring-boot) a la versión `2.2.1 REALISE`
  2. Upgrade de [Sprint Cloud](https://spring.io/projects/spring-cloud) a la versión `Hoxton.RC1`
  3. Upgrade de [JUnit](https://junit.org/junit5/) a la version `5.6.0-M1`

**Caracteristicas**

  1. Se normaliza el nombre de los proyectos a:

     ```markdown
     ${project.groupId}:${project.artifactId}
     ```

  2. Se agregaron los siguientes archivos al proyecto:

     ```markdown
     -> .gitattributes
     -> RELEASE.md
     -> lombok.config
     ```
     
  3. Adecuaciones en el plugin de Jacoco para generar el reporte que usa el SonarQube.

  4. Los plugins de evaluación de código y el Jacoco excluyen la paquetería de terceros que se ubica en la siguiente ruta:

     ```markdown
     com/tdp/ms/*/model/thirdparty
     ```
  
  5. Cambia el host del SonarQube

     ```markdown
     tdp-sonar.eastus2.cloudapp.azure.com:9000
     ```
  
  6.  Se agrega el plugin de PDM y la sección de reportes para generar un reporte integral de la calidad del código.

  7. Se incorpora el manejo del <mark>context-path</mark>.

  8. Integración con el nuevo microservicio de catálogo de errores.

  9. Modificación en el manejo de las excepciones con GenesisException.

  10. Se agrega el starter para el uso de [Table Storage](https://azure.microsoft.com/es-es/services/storage/tables/) en Azure.

  11. Los proyectos ahora pueden usar Maven o Gradle como gestores de dependencias.

  12. La generación de los microservicios con el <mark>TDP-CLI</mark> no requiere credenciales.

#### Versión 1.3.5
------
  **Estructura**

  1. El framework pasa de ser un proyecto multi-repositorio a un mono-repositorio.

  2. Se modifica el manejador de dependencia del framework de Maven a [Gradle](https://openwebinars.net/blog/que-es-gradle/).

**Caracteristicas**

  1. Las cabeceras obligatorias ya no son Case-Sensitive.

  2. Se maneja una versión de `springfox 2.9.9` que solo se maneja en el Framework Génesis.

  3. La generación del swagger y la visualizacion del Swagger UI ya no está limitado a los perfiles dev y swagger.

  4. Se agrega al `application.yml` los campos de información adicional para el swagger.

  5. Ajuste en el plugin de Jacoco ya que no se mostraba correctamente el reporte en el nuevo SonarQube.

  6. El <mark>TDP-CLI</mark> ya puede ejecutarse con [Node.js](https://nodejs.org/es/about/releases/) LTS versión `12`.
