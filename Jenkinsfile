pipeline {
  agent any
  stages {
    stage("Start container") {
      steps {
        sh 'sudo docker-compose up -d '
        sh 'sudo docker-compose ps'
      }
    }
  }
}
