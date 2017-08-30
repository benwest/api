<?php	
namespace Craft;

return [
    
    'base' => 'api',
    
    'cache' => false,
    
    'routes' => [
    
        '' => function () {
            
            return 'home';
            
        },
        
        '/project/{slug}' => function ( $params ) {
            
            return [
                'slug' => $params[ 'slug' ]
            ];
            
        }
    
    ]

];