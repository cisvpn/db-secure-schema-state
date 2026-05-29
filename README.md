# DB Secure Schema State for Laravel
### SSL-enabled, Postgres-enhanced schema dumps with MariaDB safety

This package overrides Laravel's `PostgresSchemaState` to provide full SSL support when dumping
schemas

## ✨ Features

- SSL CA / CERT / KEY support
- Optional SSL verification toggles
- Drop-in replacement for Laravel's SchemaState
- No framework modifications required

## 📦 Installation

```bash
composer require hazratmilad/db-secure-schema-state
