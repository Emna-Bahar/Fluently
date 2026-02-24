import { Controller } from '@hotwired/stimulus';
import { Calendar } from '@fullcalendar/core';
import dayGridPlugin     from '@fullcalendar/daygrid';
import timeGridPlugin    from '@fullcalendar/timegrid';
import interactionPlugin from '@fullcalendar/interaction';
import frLocale          from '@fullcalendar/core/locales/fr';

export default class extends Controller {
    static targets = ['holder'];

    connect() {
        console.log('✅ Stimulus CalendarController connecté');
        this._initCalendar();

        document.addEventListener('calendar:refresh', () => {
            if (this.calendar) this.calendar.refetchEvents();
        });
    }

    disconnect() {
        if (this.calendar) this.calendar.destroy();
    }

    _initCalendar() {
        const el = this.hasHolderTarget
            ? this.holderTarget
            : document.getElementById('calendar-holder');

        if (!el) {
            console.error('❌ #calendar-holder introuvable');
            return;
        }

        this.calendar = new Calendar(el, {
            plugins: [dayGridPlugin, timeGridPlugin, interactionPlugin],
            locale:  frLocale,
            initialView: 'dayGridMonth',
            headerToolbar: {
                left:   'prev,next today',
                center: 'title',
                right:  'dayGridMonth,timeGridWeek,timeGridDay'
            },
            buttonText: {
                today: "Aujourd'hui",
                month: 'Mois',
                week:  'Semaine',
                day:   'Jour'
            },
            events: {
                url:     '/calendar/events',
                method:  'GET',
                failure: () => console.error('❌ Erreur chargement events')
            },
            editable:   false,
            selectable: false,
            height: 'auto',
            eventClassNames: function(arg) {
                const s = (arg.event.extendedProps.statut || '')
                    .toLowerCase().replace(' ', '_');
                return ['fc-event-' + s];
            },
            eventClick: function(info) {
                if (typeof openSessionModal === 'function') {
                    openSessionModal(info.event);
                }
            }
        });

        this.calendar.render();
        el.dataset.calendarReady = '1';
        console.log('✅ FullCalendar rendu via Stimulus');
    }
}