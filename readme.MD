# Database Product API

Ja, moest dit helaas maken voor school. Was wel een leuke opdracht dus dat. Tot de volgende keer, doei!


## API Reference

#### Create Product

```http
  GET /api.php
```
| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `apikey`  | `string` | **Required**. API Key      |
| `name`    | `string` | **Required**. Product Name |
| `desc`    | `string` | **Required**. Product Description |
| `price`   | `int`    | **Required**. Product Price |

#### Read
```http
  GET /api.php
```
| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `apikey`  | `string` | **Required**. API Key             |
| `id`      | `int`    | **Optional**. Id of product to fetch |

#### Update
```http
  GET /api.php
```
| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `apikey`  | `string` | **Required**. API Key      |
| `id`      | `int`    | **Required**. Id of product to fetch |
| `name`    | `string` | **Optional**. Product Name |
| `desc`    | `string` | **Optional**. Product Description |
| `price`   | `int`    | **Optional**. Product Price |

#### Delete
```http
  GET /api.php
```
| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `apikey`  | `string` | **Required**. API Key             |
| `id`      | `int`    | **Optional**. Id of product to delete |

#### Search
```http
  GET /api.php
```
| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `apikey`  | `string` | **Required**. API Key             |
| `name`    | `string` | **Required**. Name to search      |