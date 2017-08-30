<?php	
namespace Craft;

return [
    
    'base' => 'api',
    
    'cache' => false,
    
    'routes' => [
    
        '' => function () {
            
            return 'home';
            
        },
        
        '/project/{slug}' => function ( $params, $query ) {
            
            return [
                'slug' => $params[ 'slug' ]
            ];
            
        }
    
    ]

];