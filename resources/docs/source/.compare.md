---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://windturbine-ik.com/docs/collection.json)

<!-- END_INFO -->

#Sensor Log


API untuk menyimpan dan mengambil data log sensor
<!-- START_b0cff0c10eb610d2dcad9f30ee0462a1 -->
## Mengambil Log Sensor

Mengambil data log sensor berdasarkan waktu tertentu.

> Example request:

```bash
curl -X GET \
    -G "http://windturbine-ik.com/api/sensorLog?dateRange=%5B%222022-01-01%22%2C+%222022-01-21%22%5D&sort=created_at&order=ascending.+Defaults+to+%22descending%22.&pageSize=10.+Defaults+to+15." \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://windturbine-ik.com/api/sensorLog"
);

let params = {
    "dateRange": "["2022-01-01", "2022-01-21"]",
    "sort": "created_at",
    "order": "ascending. Defaults to "descending".",
    "pageSize": "10. Defaults to 15.",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET api/sensorLog`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `dateRange` |  optional  | Array periode tanggal.
    `sort` |  optional  | Sorting field.
    `order` |  optional  | Order sorting.
    `pageSize` |  optional  | Jumlah data per halaman.

<!-- END_b0cff0c10eb610d2dcad9f30ee0462a1 -->

<!-- START_91ca2b71e932f15af6ca22ccb9353bf0 -->
## Get Last Data

Mengambil data terakhir dari sebuah sensor

> Example request:

```bash
curl -X GET \
    -G "http://windturbine-ik.com/api/sensorLog/getLastData" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"parameter":"data1","unit":"km\/h"}'

```

```javascript
const url = new URL(
    "http://windturbine-ik.com/api/sensorLog/getLastData"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "parameter": "data1",
    "unit": "km\/h"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
12
```

### HTTP Request
`GET api/sensorLog/getLastData`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `parameter` | string |  required  | Parameter sensor.
        `unit` | string |  optional  | Satuan nilai sensor.
    
<!-- END_91ca2b71e932f15af6ca22ccb9353bf0 -->

<!-- START_e0c595174ba6f51ce5ee6de948d1715c -->
## Get Tekanan

Mengambil data terakhir sensor tekanan

> Example request:

```bash
curl -X GET \
    -G "http://windturbine-ik.com/api/sensorLog/getTekanan" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"parameter":"data1","date":"2022-01-01","unit":"hPa"}'

```

```javascript
const url = new URL(
    "http://windturbine-ik.com/api/sensorLog/getTekanan"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "parameter": "data1",
    "date": "2022-01-01",
    "unit": "hPa"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "value": [
        3,
        4,
        2,
        4,
        5
    ],
    "category": [
        "10:00",
        "11:00",
        "12:00",
        "13:00",
        "14:00"
    ],
    "unit": "inHg"
}
```

### HTTP Request
`GET api/sensorLog/getTekanan`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `parameter` | string |  required  | Parameter sensor.
        `date` | string |  required  | Tanggal.
        `unit` | string |  optional  | optional Satuan nilai sensor.
    
<!-- END_e0c595174ba6f51ce5ee6de948d1715c -->

<!-- START_d64f43f75fb082efa52b4ef366724505 -->
## Get Terbit Terbenam

Mengambil data waktu matahari terbit dan terbenam

> Example request:

```bash
curl -X GET \
    -G "http://windturbine-ik.com/api/getTerbitTerbenam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://windturbine-ik.com/api/getTerbitTerbenam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "terbit": "04:45:00",
    "terbenam": "18:15:00"
}
```

### HTTP Request
`GET api/getTerbitTerbenam`


<!-- END_d64f43f75fb082efa52b4ef366724505 -->

<!-- START_11ad22bb62c7fb451206ba1148a4282a -->
## Get Last Update

Mengambil waktu terakhir data sensor diupdate

> Example request:

```bash
curl -X GET \
    -G "http://windturbine-ik.com/api/getLastUpdate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://windturbine-ik.com/api/getLastUpdate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
"2022-02-13 15:30:03"
```

### HTTP Request
`GET api/getLastUpdate`


<!-- END_11ad22bb62c7fb451206ba1148a4282a -->


