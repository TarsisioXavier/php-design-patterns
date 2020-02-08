# Source
Refactoring Guru: https://refactoring.guru/

### Abstract Factory Method
![Base UML](https://refactoring.guru/images/patterns/diagrams/abstract-factory/structure.png)

## File Struture
```
.
├── composer.json
├── LICENSE
├── README.md
└── src
    ├── ClientCode.php
    ├── Conceptual
    │   └── Products
    │       ├── ConcreteProductA1.php
    │       ├── ConcreteProductA2.php
    │       ├── ConcreteProductB1.php
    │       ├── ConcreteProductB2.php
    │       ├── Contracts
    │       │   ├── AbstractProductA.php
    │       │   └── AbstractProductB.php
    │       └── Factory
    │           ├── AbstractFactory.php
    │           ├── ConcreteFactory1.php
    │           └── ConcreteFactory2.php
    ├── index.php
    └── RealWorld
        └── HtmlBuilder
            ├── Builder
            │   ├── BasePageTemplate.php
            │   ├── Contracts
            │   │   ├── PageTemplate.php
            │   │   ├── TemplateRenderer.php
            │   │   └── TitleTemplate.php
            │   └── TemplateFactory.php
            ├── Page.php
            ├── PHP
            │   ├── PHPTemplateFactory.php
            │   ├── PHPTemplatePageTemplate.php
            │   ├── PHPTemplateRenderer.php
            │   └── PHPTemplateTitleTemplate.php
            └── Twig
                ├── TwigPageTemplate.php
                ├── TwigRenderer.php
                ├── TwigTemplateFactory.php
                └── TwigTitleTemplate.php

11 directories, 28 files
```