<script setup>
defineProps({
  msg: {
    type: String,
    required: true
  }
})
</script>

<template>
  <div class="container">
    <h2 class="text-center mt-5">My Vue Todo App</h2>

    <div class="d-flex">
      <input v-model="task" type="text" placeholder="enter task" class="form-control">
      <!-- v-modelは入力とtaskのプロパティが同じ値になる -->
      <button @click="submitTask" class="btn btn-warning rounded-1">submit</button>
    </div>

    <table class="table table-bordered mt-5">
  <thead>
    <tr>
      <th scope="col">Task</th>
      <th scope="col text-center">#</th>
      <th scope="col text-center">#</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(task,index) in tasks" :key="index">
      <!-- keyの値は文字か数値 -->
      <td>{{ task.name }}</td>
      <td>
        <div class="text-center" @click="editTask(index)">
          <span class="fa fa-pen"></span>
        </div>
      </td>
      <td>
        <div class="text-center" @click="deleteTask(index)">
          <span class="fa fa-trash"></span>
        </div>
      </td>
    </tr>
  </tbody>
</table>
  </div>
</template>

<script>
export default {
  name:"HelooWorld",
  props: {
    msg: String,
  },

  data(){
    return{
      task:'',
      editedTask: null,
      //空の文字列になるプロパティ
      tasks: [
        {
          name:'aaaaaaaaaa',
          status: 'to-do'
        },
        {
          name:'aaaaaaaaaa',
          status: 'in-progress'
        }
      ]
    }
  },
  methods:{
    submitTask() {
      if(this.task.length === 0) {
        return;
      }

      if(this.editedTask === null){
      this.tasks.push({
        name: this.task,
        status: 'to-do'
      });
      }else{
        this.tasks[this.editedTask].name = this.task;
        this.editedTask = null;
      }

      this.task = '';
    },

    deleteTask(index) {
      this.tasks.splice(index,1)
    },

    editTask(index) {
      this.task = this.tasks[index].name;
      this.editedTask = index;

    }
  }
};
</script>

<style scoped>

</style>
