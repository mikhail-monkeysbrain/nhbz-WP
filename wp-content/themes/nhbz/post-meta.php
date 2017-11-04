<?php 
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'Основные данные темы')
	->set_icon('dashicons-admin-customizer')
	->add_fields( array(
		Field::make('text', 'main-tel', 'Телефон'),
	));


// Home

Container::make('post_meta', 'Поля для заполнения')
	->show_on_post_type(array('page'))
	->show_on_template('template-home.php')
	->add_fields( array(
		Field::make('rich_text', 'home_activities', 'НАПРАВЛЕНИЕ ДЕЯТЕЛЬНОСТИ')->set_width( 100 )
	));

// Card

Container::make('post_meta', 'Поля для заполнения')
	->show_on_post_type(array('product'))
	->add_fields( array(
		Field::make('text', 'product_sub', 'Подзаголовок')->set_width( 100 )
	));

// Contacts

Container::make('post_meta', 'Поля для заполнения')
	->show_on_post_type(array('page'))
	->show_on_template('template-contacts.php')
	->add_fields( array(
		Field::make('rich_text', 'contacts_ks', 'Коммерческая служба')->set_width( 100 ),
		Field::make('rich_text', 'contacts_fo', 'Финансовый отдел')->set_width( 100 ),
		Field::make('rich_text', 'contacts_pr', 'Приемная')->set_width( 100 ),
		Field::make('text', 'contacts_adr', 'Адрес')->set_width( 100 )
	));



