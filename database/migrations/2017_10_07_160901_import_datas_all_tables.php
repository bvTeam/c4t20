<?php

use App\CompanyPostModel;
use App\TypesModel;
use App\User;
use App\UserCvModel;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\CompanyModel;

class ImportDatasAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        User::create([
            'name' => 'Деляна Крумова',
            'email' => 'DKrumova@abv.bg',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Томи Иванов',
            'email' => 'Ivanov@abv.bg',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Крум Никифоров',
            'email' => 'Krum@abv.bg',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Анастасия Атанасова',
            'email' => 'Atanasova@abv.bg',
            'password' => bcrypt('123456')
        ]);

        CompanyModel::create([
            'name' => 'securiscope',
            'phone' => '0877332219',
            'email' => 'securiscope@abv.com',
            'address' => 'ул. "Дякон Игнатий" №19',
            'city' => 'София'
        ]);

        CompanyModel::create([
            'name' => 'codexive',
            'phone' => '0881259468',
            'email' => 'codexive@abv.bg',
            'address' => 'ул. „Люляк“ 11, 7000 Пазара, Русе',
            'city' => 'Русе'
        ]);

        CompanyModel::create([
            'name' => 'coceptual',
            'phone' => '0882389674',
            'email' => 'coceptual@abv.bg',
            'address' => '7013 Здравец Изток, Русе',
            'city' => 'Русе'
        ]);

        TypesModel::create([
            'type' => 'Пълно работно време'
        ]);

        TypesModel::create([
            'type' => 'Непълно работно време'
        ]);

        TypesModel::create([
            'type' => 'Стаж'
        ]);

        TypesModel::create([
            'type' => 'Курс'
        ]);


        CompanyPostModel::create([
            'title' => 'ОХРАНИТЕЛ',
            'description' => 'Охранителна фирма "securiscope" набира охранители за свой обект в гр.Русе при следните условия:- отдаване на дневни и нощни смени- 15 дни в месеца по схемата 2 работни/дневна, нощна/ - 2 почивни, с работно време от 19:30 часа вечер до 07:30 часа на другия ден и от 07:30 до 19.30. Ние предлагаме:- трудов договор, служебен транспорт, добро заплащане/старт от 500 и 600лв./ , коректност
',
            'requirements' => 'средно образование- чисто съдебно минало, добро физическо и психическо състояние- лоялност към фирмата и отговорност към възложените му функции- честност и постоянство при изпълнение на служебните задължения .',
            'type_id' => 1,
            'company_id' => 1,
            'city' => 'Русе'
        ]);

        CompanyPostModel::create([
            'title' => 'Сервизен специалист компютърна техника',
            'description' => 'Фирма codexive е лидер в предоставянето на софтуерни и хардуерни услуги в Русе. Директен внос и търговия с компютърна техника втора употреба, сервиз за лаптопи, таблети, монитори и смартфони, уеб дизайн, хостинг администрация, разработка на мобилни приложения са част от дейностите на фирмата.
            Търси се Сервизен специалист (мъж или жена)- хардуер, софтуер
Основни задачи пред служителя:
Ремонт на захранващи блокове и адаптери, диагностика и ремонт на дънни платки, монтаж и демонтаж на елементи в компютърна система, лаптоп, таблет, смартфон, обслужване на лазерни принтери.',
            'requirements' => '- минимум Средно техническо образование
с Предимство се разглеждат кандидати, които:
- имат опит в областта
- имат висше техническо образование по специалности Компютърни системи и технологии, или друга подобна
- представят препоръки от предишни работодатели',

            'type_id' => 2,
            'company_id' => 2,
            'city' => 'Русе'
        ]);

        CompanyPostModel::create([
            'title' => 'Специалист 3D моделиране и 3D анимация',
            'description' => 'Изработка на графични обекти, 3D фигури и дизайн. Желателно е кандидатите да имат опит поне в 3D моделирането',
            'requirements' => '- организираност
                                - компетентност
                                - чувство за отговорност
                                - работа в екип
                                - лоялност',
            'type_id' => 3,
            'company_id' => 3,
            'city' => 'Русе'
        ]);

        CompanyPostModel::create([
            'title' => 'безплатни курсове по програмиране',
            'description' => 'codexive организира безплатни курсове по програмиране за напълно начинаещи в гр. Русе от януари 2017 г. Целта е всеки, който има интерес към програмиране и технологии, да опита програмирането и се увери сам дали е за него и дали иска да се занимава сериозно. Повече програмисти и ИТ специалисти означава по-силна икономика и по-добър стандарт на живот в България, не само за ИТ специалистите, но и за всички останали.',
            'requirements' => 'няма',
            'type_id' => 4,
            'company_id' => 2,
            'city' => 'Русе'
        ]);

        UserCvModel::create([
            'user_id' => 1,
            'phone' => '0877465327',
            'description' => '',
            'probation' => 'няма',
            'type_id' => 3,
            'education' => '2007 - 2011 ПГ по строителство, архитектура и геодезия „Пеньо Пенев“ 2011 - 2015 Русенски университет "Ангел Кънчев"'
        ]);

        UserCvModel::create([
            'user_id' => 2,
            'phone' => '0877965823',
            'description' => '',
            'probation' => 'няма',
            'type_id' => 1,
            'education' => '2003 - 2007 СОУ „Васил Левски“'
        ]);

        UserCvModel::create([
            'user_id' => 3,
            'phone' => '0884568234',
            'description' => '',
            'probation' => 'няма',
            'type_id' => 2,
            'education' => '2009 - 2013 ПГ по туризъм „Иван Павлов“ 2013 - 2017 Софийски университет "Св. Климент Охридски"'
        ]);

        UserCvModel::create([
            'user_id' => 4,
            'phone' => '0884123567',
            'description' => '',
            'probation' => 'няма',
            'type_id' => 4,
            'education' => '2000 - 2004 ПГ по туризъм „Иван Павлов“ '
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
