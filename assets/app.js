import './styles/app.css';

import { Application } from '@hotwired/stimulus';
import CalendarController from './controllers/calendar_controller.js';

const application = Application.start();
application.register('calendar', CalendarController);

console.log('✅ Stimulus démarré — controller "calendar" enregistré');