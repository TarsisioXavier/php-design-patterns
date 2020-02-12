# Source
Refactoring Guru: https://refactoring.guru/

### Builder
![CU](https://refactoring.guru/images/patterns/diagrams/builder/structure.png)

## File Structure
```
.
├── composer.json
├── LICENSE
├── README.md
└── src
    ├── ClientCode.php
    ├── Conceptual
    │   ├── Builder
    │   │   ├── ConcreteBuilder1.php
    │   │   ├── Contracts
    │   │   │   └── Builder.php
    │   │   └── Director.php
    │   └── Products
    │       └── Product1.php
    ├── index.php
    └── RealWorld
        └── Database
            ├── Grammar
            │   ├── MysqlQueryBuilder.php
            │   └── PostgresQueryBuilder.php
            └── QueryBuilder
                └── SQLQueryBuilder.php

9 directories, 12 files
```
