<p align="center"><a href="https://laravel.com" target="_blank"><img src="http://apigoat.oyifarm.com/assets/image/logo.png" width="400"></a></p>
<!-- 
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p> -->

## Smart Goat API URL

<b> Get all data Dht Sensor </b>
` https://apigoat.oyifarm.com/api/datasensor1`

<b> Get data Dht Sensor by per id </b>
` https://apigoat.oyifarm.com/api/datasensor1/id/{id}`

<b> Get all data RFID Sensor  </b>
`http://oyifarm.com/api/datasensor2`

<b> Get data RFID Sensor by per id </b>
` https://apigoat.oyifarm.com/api/datasensor2/id/{id}`


<b> Get all data GY302 Sensor </b>
` https://apigoat.oyifarm.com/api/datasensor3`

<b> Get data GY302 Sensor by per id </b>
` https://apigoat.oyifarm.com/api/datasensor3/id/{id}`

<b> Get all data Amonia Sensor </b>
` https://apigoat.oyifarm.com/api/datasensor4`

<b> Get data Amonia Sensor by per id </b>
` https://apigoat.oyifarm.com/api/datasensor4/id/{id}`

<b> POST Dht Sensor data </b>
` https://apigoat.oyifarm.com/api/sensor/datasensor1`
`body{
    id : value,
    suhu : value,
    kelembapan : value
}`


<b> POST rfid Sensor data </b>
`https://apigoat.oyifarm.com/api/sensor/datasensor2`
`
body{
    id: value,
    rfid: value
}
`

<b> POST intensitas Sensor data </b>
` https://apigoat.oyifarm.com/api/sensor/datasensor3`
`
body{
    id: value,
    intensitas: value
}
`


<b> POST amonia Sensor data </b>
` https://apigoat.oyifarm.com/api/sensor/datasensor4`
`
body{
    id: value,
    amonia: value
}
`

<b> POST data intensitas (saklar) </b>
` https://apigoat.oyifarm.com/api/address/ip/add` `body{ name:value, ip:value }`

<b> POST data intensitas (saklar) </b>
` https://apigoat.oyifarm.com/api/saklar/saklar1``body{ id:value,saklar:value}`

<b>PUT {edit} data nilai intensitas</b>
` https://apigoat.oyifarm.com/api/saklar/saklar1/update/{id}` `body{ id:{id},saklar:value}`

<b> PUT (edit) data IP  </b> ` https://apigoat.oyifarm.com/api/address/ip/update/id/{id}`

<b> GET data IP  </b> ` https://apigoat.oyifarm.com/api/address/ip/{id}` `body{ip : value}`
<b> DELETE data IP  </b> ` https://apigoat.oyifarm.com/api/address/ip/delete/id/{id}`

<b> GET all data saklar/intensitas </b> ` https://apigoat.oyifarm.com/api/saklar/saklar1/`

<b> DELETE all data saklar/intensitas </b> ` https://apigoat.oyifarm.com/api/saklar/saklar1/delete/{id}`

<b>Delete all data model<b> ` https://apigoat.oyifarm.com/api/data/alldata/{model name}`
`
list model name = dht,intensitas,rfid,amonia
`
<br>

<b>POST Image (Upload Gambar)</b> `http://apigoat.oyifarm.com/api/image/upload` 

`body{id:value, name:value, image:value}`


<!-- Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
 -->
