require('./bootstrap');
import  AddTask  from './components/AddTask.vue';
import Navigation from './components/Navigation.vue';
import TaskList from './components/TaskList.vue';
import MyFooter from './components/MyFooter.vue';


new Vue({
    el:'#root',
    components:{

      'addtask':  AddTask,
      'navigation': Navigation,
      'Tasks' : TaskList,
      'footersec' : MyFooter
    }
})