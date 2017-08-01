 </div>
        
        
    <script>
        
            $(document).ready(function() {
                $('#chatlogsLog').DataTable({
                    serverSide: true,
                    ajax: {
                        url: '/admin/chatlogsAjax',
                        method: 'POST'
                    },
                    columns: [
                        {data: 'line', searchable: false},
                        {data: 'CHATSTRING'},
                        {data: 'LOGDATE'},
                        {data: 'RECIEVER'},
                        {data: 'SENDER'}
                        
                        

                    ]
                });});
            $(document).ready(function() {
                $('#connLog').DataTable({
                    serverSide: true,
                    ajax: {
                        url: '/admin/connectionsAjax',
                        method: 'POST'
                    },
                    columns: [
                        {data: 'line', searchable: false},
                        {data: 'IP'},
                        {data: 'NAME'},
                        {data: 'STATUS'},
                        {data: 'TIME'}
                        
                    ]
                });});
            
            $(document).ready(function() {
                $('#destroyLog').DataTable({
                    serverSide: true,
                    ajax: {
                        url: '/admin/destroylogAjax',
                        method: 'POST'
                    },
                    columns: [
                        {data: 'line', searchable: false},
                        {data: 'TYPE'},
                        {data: 'NAME'},
                        {data: 'DESTROYTIME'}
                        
                        
                    ]
                });});
            
            $(document).ready(function() {
                $('#logsLog').DataTable({
                    serverSide: true,
                    ajax: {
                        url: '/admin/logsAjax',
                        method: 'POST'
                    },
                    columns: [
                        {data: 'line', searchable: false},
                        {data: 'LOGDATE'},
                        {data: 'LOGSTRING'}

                    ]
                });});
            
            $(document).ready(function() {
                $('#sectorsLog').DataTable({
                    serverSide: true,
                    ajax: {
                        url: '/admin/sectorsAjax',
                        method: 'POST'
                    },
                    columns: [
                        {data: 'line', searchable: false},
                        {data: 'LASTUPDATE'},
                        {data: 'NAME'},
                        {data: 'PEACE'},
                        {data: 'PROTECTED'},
                        {data: 'TYPE'}
                        

                    ]
                });});
            $(document).ready(function() {
                $('#serverstatusLog').DataTable({
                    serverSide: true,
                    ajax: {
                        url: '/admin/serverstatusAjax',
                        method: 'POST'
                    },
                    columns: [
                        {data: 'line', searchable: false},
                        {data: 'STATUS'},
                        {data: 'TIME'}
                        
                        

                    ]
                });});
            
            $(document).ready(function() {
                $('#smranksLog').DataTable({
                    serverSide: true,
                    ajax: {
                        url: '/admin/smranksAjax',
                        method: 'POST'
                    },
                    columns: [
                        {data: 'line', searchable: false},
                        {data: 'COMMANDSALLOWED'},
                        {data: 'NAME'}
                        
                        

                    ]
                });});
            
            $(document).ready(function() {
                $('#adminlogsLog').DataTable({
                    serverSide: true,
                    ajax: {
                        url: '/admin/adminlogsAjax',
                        method: 'POST'
                    },
                    columns: [
                        {data: 'line', searchable: false},
                        {data: 'COMMAND'},
                        {data: 'NAME'},
                        {data: 'TIME'}
                        
                        

                    ]
                });});
            
            $(document).ready(function() {
                $('#bountiesLog').DataTable({
                    serverSide: true,
                    ajax: {
                        url: '/admin/bountiesAjax',
                        method: 'POST'
                    },
                    columns: [
                        {data: 'line', searchable: false},
                        {data: 'BOUNTY'},
                        {data: 'DEATHS'},
                        {data: 'KILLEDBY'},
                        {data: 'KILLS'},
                        {data: 'LASTKILL'},
                        {data: 'NAME'}

                    ]
                });});
            
            
            $(document).ready(function() {
                $('#killsLog').DataTable({
                    serverSide: true,
                    ajax: {
                        url: '/admin/killsAjax',
                        method: 'POST'
                    },
                    columns: [
                        {data: 'line', searchable: false},
                        {data: 'KILLER'},
                        {data: 'KILLTIME'},
                        {data: 'VICTIM'}

                    ]
                });});
            
            $(document).ready(function() {
                $('#votesLog').DataTable({
                    serverSide: true,
                    ajax: {
                        url: '/admin/votesAjax',
                        method: 'POST'
                    },
                    columns: [
                        {data: 'line', searchable: false},
                        {data: 'INFO'},
                        {data: 'NAME'},
                        {data: 'TIME'}

                    ]
                });});
            
            
            
            $(document).ready(function() {
                $('#asteroidList').DataTable({
                    serverSide: true,
                    ajax: {
                        url: '/admin/asteroid/listAjax',
                        method: 'POST'
                    },
                    columns: [
                        {data: 'line', searchable: false},
                        {data: 'CURRENTSECTOR'},
                        {data: 'LASTPOSITION'},
                        {data: 'NAME', searchable: false},
                        {
                            targets: 5,
                            data: 'line',
                            render: function ( data, type, full, meta ) {
                                    return "<a href='/admin/asteroid/details/"+data+"'>Details</a>";
                                        }
                        }
                    ]
                });});
            
            $(document).ready(function() {
                $('#playerList').DataTable({
                    serverSide: true,
                    ajax: {
                        url: '/admin/player/listAjax',
                        method: 'POST'
                    },
                    columns: [
                        {data: 'line', searchable: false},
                        {data: 'BANKCREDITS'},
                        {data: 'CONTROLLING'},
                        {data: 'CONTROLTYPE'},
                        {data: 'CREDITS'},
                        {data: 'CURRENTIP'},
                        {data: 'CURRENTSECTOR'},
                        {data: 'FACTION'},
                        {data: 'LASTCORE'},
                        {data: 'LASTPOSITION'},
                        {data: 'LASTUPDATE'},
                        {data: 'NAME'},
                        {data: 'ONLINE'},
                        {data: 'RANK'},
                        {
                            targets: 5,
                            data: 'line',
                            render: function ( data, type, full, meta ) {
                                    return "<a href='/admin/player/details/"+data+"'>Details</a>";
                                        }
                        }
                    ]
                });});
            
            $(document).ready(function() {
                $('#shipList').DataTable({
                    serverSide: true,
                    ajax: {
                        url: '/admin/ship/listAjax',
                        method: 'POST'
                    },
                    columns: [
                        {data: 'line', searchable: false},
                        {data: 'ATTACHED'},
                        {data: 'BLOCK'},
                        {data: 'CREATOR'},
                        {data: 'CURRENTSECTOR'},
                        {data: 'DOCKED'},
                        {data: 'ENTITYTYPE'},
                        {data: 'FACTION'},
                        {data: 'LASTCONTROLLER'},
                        {data: 'LASTPOSITION'},
                        {data: 'LASTUPDATE'},
                        {data: 'MASS'},
                        {data: 'NAME'},
                        {
                            targets: 5,
                            data: 'line',
                            render: function ( data, type, full, meta ) {
                                    return "<a href='/admin/ship/details/"+data+"'>Details</a>";
                                        }
                        }
                    ]
                });});
            
            
            $(document).ready(function() {
                $('#shopList').DataTable({
                    serverSide: true,
                    ajax: {
                        url: '/admin/shop/listAjax',
                        method: 'POST'
                    },
                    columns: [
                        {data: 'line', searchable: false},
                        {data: 'CURRENTSECTOR'},
                        {data: 'NAME'},
                        {
                            targets: 5,
                            data: 'line',
                            render: function ( data, type, full, meta ) {
                                    return "<a href='/admin/shop/details/"+data+"'>Details</a>";
                                        }
                        }
                    ]
                });});
            
            
            $(document).ready(function() {
                $('#stationList').DataTable({
                    serverSide: true,
                    ajax: {
                        url: '/admin/station/listAjax',
                        method: 'POST'
                    },
                    columns: [
                        {data: 'line', searchable: false},
                        {data: 'ATTACHED'},
                        {data: 'BLOCK'},
                        {data: 'CREATOR'},
                        {data: 'CURRENTSECTOR'},
                        {data: 'DOCKED'},
                        {data: 'ENTITYTYPE'},
                        {data: 'FACTION'},
                        {data: 'LASTCONTROLLER'},
                        {data: 'LASTPOSITION'},
                        {data: 'MASS'},
                        {data: 'NAME'},
                        {
                            targets: 13,
                            data: 'line',
                            render: function ( data, type, full, meta ) {
                                    return "<a href='/admin/station/details/"+data+"'>Details</a>";
                                        }
                        }
                    ]
                });});
        </script>    
    </body>
</html>

