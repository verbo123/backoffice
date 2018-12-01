<?php
$active = "mensuel";
require 'pages/header.php';
require 'pages/menu_header.php';
require 'pages/side_menu.php';

?>

<link rel="stylesheet" href="vendors/bower_components/sweetalert2/dist/sweetalert2.min.css">

<section class="content">
        <div class="content__inner">
            <header class="content__title content__title--calendar">
                <h1>Statistique mensuelle</h1>
                <small>Il s'agit d'une interface sous forme de calendrier montrant les statistiques du nombre de virement, de recharge au cours de chaque journée d'une année .</small>

                <div class="actions actions--calendar">
                    <a href="#" class="actions__item actions__calender-prev"><i class="zmdi zmdi-long-arrow-left"></i></a>
                    <a href="#" class="actions__item actions__calender-next"><i class="zmdi zmdi-long-arrow-right"></i></a>
                    <i class="actions__item actions__item--active zmdi zmdi-view-comfy" data-calendar-view="month"></i>
                    <i class="actions__item zmdi zmdi-view-week" data-calendar-view="basicWeek"></i>
                    <i class="actions__item zmdi zmdi-view-day" data-calendar-view="basicDay"></i>
                </div>
            </header>

            <div class="calendar card"></div>

            <!-- Add new event -->
            <div class="modal fade" id="new-event" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">New Event</h5>
                        </div>
                        <div class="modal-body">
                            <form class="new-event__form">
                                <div class="form-group">
                                    <input type="text" class="form-control new-event__title" placeholder="Event Title">
                                    <i class="form-group__bar"></i>
                                </div>

                                <input type="hidden" class="new-event__start" />
                                <input type="hidden" class="new-event__end" />
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-link new-event__add">Add Event</button>
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Edit event -->
            <div class="modal fade" id="edit-event" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <form class="edit-event__form">
                                <div class="form-group">

                                    <input type="text" class="form-control edit-event__title" placeholder="Event Title">
                                    <i class="form-group__bar"></i>
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control edit-event__description textarea-autosize" placeholder="Event Desctiption"></textarea>
                                    <i class="form-group__bar"></i>
                                </div>

                                <input type="hidden" class="edit-event__id">
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-link" data-calendar="update">Update</button>
                            <button class="btn btn-link" data-calendar="delete">Delete</button>
                            <button class="btn btn-link" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php require 'pages/footer.php'; ?>
<script src="vendors/bower_components/moment/min/moment.min.js"></script>
<script src="vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="vendors/bower_components/autosize/dist/autosize.min.js"></script>
<script src="vendors/bower_components/sweetalert2/dist/sweetalert2.min.js"></script>

    <script type="text/javascript">
        'use strict';
        $(document).ready(function() {
            var date = new Date();
            var m = date.getMonth();
            var y = date.getFullYear();
            var tab=[];

            $.ajax({
                url:'Tools/calendar_data.php',
                success : function (data) {
                    data=JSON.parse(data);
                    var tran=data.stat;
                    var vire=data.vire;
                    var rech=data.rech;

                    var len=tran.length;
                    if(len > 0)
                    {
                        for(var i=0;i<len;i++)
                        {
                            tab.push({
                                id : i+1,
                                title : vire[i].nbre_virement+' Virements effecutés',
                                start: new Date(parseInt(tran[i].annee), parseInt(tran[i].mois), parseInt(tran[i].jour)),
                                allDay: true,
                                description : ''
                            });

                            tab.push({
                                id : i+1,
                                title : rech[i].nbre_recharge+' Recharges effecutés',
                                start: new Date(parseInt(tran[i].annee), parseInt(tran[i].mois), parseInt(tran[i].jour)),
                                allDay: true,
                                description : ''
                            });

                            tab.push({
                                id : i+1,
                                title : tran[i].nbre+' Transactions effecutées',
                                start: new Date(parseInt(tran[i].annee), parseInt(tran[i].mois), parseInt(tran[i].jour)),
                                allDay: true,
                                description : ''
                            });
                        }
                    }

                    $('.calendar').fullCalendar({
                        header: {
                            right: '',
                            center: '',
                            left: ''
                        },
                        buttonIcons: {
                            prev: 'calendar__prev',
                            next: 'calendar__next'
                        },
                        theme: false,
                        selectable: true,
                        selectHelper: true,
                        editable: true,
                        events: tab,

                        dayClick: function(date) {
                            var isoDate = moment(date).toISOString();
                           // $('#new-event').modal('show');
                            $('.new-event__title').val('');
                            $('.new-event__start').val(isoDate);
                            $('.new-event__end').val(isoDate);
                        },

                        viewRender: function (view) {
                            var calendarDate = $('.calendar').fullCalendar('getDate');
                            var calendarMonth = calendarDate.month();

                            //Set data attribute for header. This is used to switch header images using css
                            $('.calendar .fc-toolbar').attr('data-calendar-month', calendarMonth);

                            //Set title in page header
                            $('.content__title--calendar > h1').html(view.title);
                        },

                        eventClick: function (event, element) {
                            swal({
                                title: event.title,
                                text:'Il s\'agit de toutes les opérations effectuées à cette date',
                                type: 'info',
                                showCancelButton: false,
                                buttonsStyling: false,
                                confirmButtonClass: 'btn btn-danger',
                                confirmButtonText: 'Ok',
                                cancelButtonClass: 'btn btn-light',
                                background: 'rgba(0, 0, 0, 0.96)'
                            })

                            // $('#edit-event').modal('show');
                            // $('.edit-event__id').val(event.id);
                            // $('.edit-event__title').val(event.title);
                            // $('.edit-event__description').val(event.description);
                        }
                    });


                }
            });




            //Add new Event
            $('body').on('click', '.new-event__add', function(){
                var eventTitle = $('.new-event__title').val();

                // Generate ID
                var GenRandom =  {
                    Stored: [],
                    Job: function(){
                        var newId = Date.now().toString().substr(6); // or use any method that you want to achieve this string

                        if( !this.Check(newId) ){
                            this.Stored.push(newId);
                            return newId;
                        }
                        return this.Job();
                    },
                    Check: function(id){
                        for( var i = 0; i < this.Stored.length; i++ ){
                            if( this.Stored[i] == id ) return true;
                        }
                        return false;
                    }
                };

                if (eventTitle != '') {
                    $('.calendar').fullCalendar('renderEvent', {
                        id: GenRandom.Job(),
                        title: eventTitle,
                        start: $('.new-event__start').val(),
                        end:  $('.new-event__end').val(),
                        allDay: true,
                        className: $('.event-tag input:checked').val()
                    }, true);

                    $('.new-event__form')[0].reset();
                    $('.new-event__title').closest('.form-group').removeClass('has-danger');
                    $('#new-event').modal('hide');
                }
                else {
                    $('.new-event__title').closest('.form-group').addClass('has-danger');
                    $('.new-event__title').focus();
                }
            });


            //Update/Delete an Event
            $('body').on('click', '[data-calendar]', function(){
                var calendarAction = $(this).data('calendar');
                var currentId = $('.edit-event__id').val();
                var currentTitle = $('.edit-event__title').val();
                var currentDesc = $('.edit-event__description').val();
                var currentEvent = $('.calendar').fullCalendar('clientEvents', currentId);

                //Update
                if(calendarAction === 'update') {
                    if (currentTitle != '') {
                        currentEvent[0].title = currentTitle;
                        currentEvent[0].description = currentDesc;

                        $('.calendar').fullCalendar('updateEvent', currentEvent[0]);
                        $('#edit-event').modal('hide');
                    }
                    else {
                        $('.edit-event__title').closest('.form-group').addClass('has-error');
                        $('.edit-event__title').focus();
                    }
                }

                //Delete
                if(calendarAction === 'delete') {
                    $('#edit-event').modal('hide');
                    setTimeout(function () {
                        swal({
                            title: 'Are you sure?',
                            text: "You won't be able to revert this!",
                            type: 'warning',
                            showCancelButton: true,
                            buttonsStyling: false,
                            confirmButtonClass: 'btn btn-danger',
                            confirmButtonText: 'Yes, delete it!',
                            cancelButtonClass: 'btn btn-light',
                            background: 'rgba(0,0,0,0.096)'
                        }).then(function() {
                            $('.calendar').fullCalendar('removeEvents', currentId);
                            swal({
                                title: 'Deleted!',
                                text: 'Your list has been deleted.',
                                type: 'success',
                                buttonsStyling: false,
                                cancelButtonClass: 'btn btn-light',
                                background: 'rgba(0,0,0,0.096)'
                            });
                        })
                    }, 200);
                }
            });


            //Calendar views switch
            $('body').on('click', '[data-calendar-view]', function(e){
                e.preventDefault();

                $('[data-calendar-view]').removeClass('actions__item--active');
                $(this).addClass('actions__item--active');
                var calendarView = $(this).attr('data-calendar-view');
                $('.calendar').fullCalendar('changeView', calendarView);
            });


            //Calendar Next
            $('body').on('click', '.actions__calender-next', function (e) {
                e.preventDefault();
                $('.calendar').fullCalendar('next');
            });


            //Calendar Prev
            $('body').on('click', '.actions__calender-prev', function (e) {
                e.preventDefault();
                $('.calendar').fullCalendar('prev');
            });
        });
    </script>