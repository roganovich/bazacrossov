<?php

$translation = [

    /*
    |--------------------------------------------------------------------------
    | English Language Admin Translations
    |--------------------------------------------------------------------------
    */

    'create' => [
        'fail'          => 'Не удалось выполнить операцию создания ресурса.',
        'success'       => 'Ресурс успешно создан.'
    ],
    'csrf_error'        => 'Похоже, вы долго не могли отправить форму. Пожалуйста, попробуйте снова.',
    'datatables' => [   // DataTables, files can be found @ https://datatables.net/plug-ins/i18n/
        'sInfo'         => 'Отображение  _START_ до _END_ из _TOTAL_ записей',
        'sInfoEmpty'    => 'Отображение 0 до 0 из 0 записей',
        'sInfoFiltered' => '(отфильтровано из _MAX_ всего записей)',
        'sInfoPostFix'  => '',
        'sLengthMenu'   => 'Показать _MENU_ записей',
        'sProcessing'   => '<div class="overlay"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg></span></div>',
        'sSearch'       => 'Поиск:',
        'sUrl'          => '',
        'sZeroRecords'  => 'Совпадающих записей не найдено',
        'oPaginate' => [
            'sFirst'    => 'Первый',
            'sLast'     => 'Последний',
            'sNext'     => 'Следующий',
            'sPrevious' => 'Предыдущий'
        ]
    ],
    'delete' => [
        'fail'          => 'Операция удаления ресурса завершилась неудачно.',
        'self'          => 'Вы не всегда можете получить то, что хотите.',
        'success'       => 'Ресурс успешно удален.'
    ],
    'empty'             => 'Пока нет никаких сохраненных записей. Почему бы вам сначала не создать новый?',
    'invalid'           => 'Сначала вам необходимо настроить файл .env, чтобы увидеть панель мониторинга.',
    'fields' => [
        'created_at'    => 'Создан',
        'deleted_at'    => 'Удален',
        'no'            => 'Нет',
        'published_at'  => 'Обупликован',
        'reset'         => 'Сбросить',
        'save'          => 'Сохранить',
        'updated_at'    => 'Обновлен',
        'uploaded'      => 'Загружен',
        'yes'           => 'Да',
    ],
    'last_login'        => 'Последний Вход в систему',
    'none'              => 'Ничего',
    'ops' => [
        'confirmation'  => 'Вы уверены?',
        'create'        => 'Создавать',
        'delete'        => 'Удалить',
        'edit'          => 'Редактировать',
        'modified'      => 'Изменено на',
        'name'          => 'Действия',
        'order'         => 'Заказ',
        'show'          => 'Покажите'
    ],
    'root'              => 'Приборная панель',
    'submit'            => 'Представить',
    'title'             => 'Панель управления',
    'update' => [
        'fail'          => 'Не удалось выполнить операцию обновления ресурса.',
        'success'       => 'Ресурс успешно обновлен.'
    ],
    'save' => 'Сохранить'
];

return createTranslation(require __DIR__ . DIRECTORY_SEPARATOR . 'resources.php', $translation);
