pipeline {
    agent any

    stages {

        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Validate') {
            steps {
                sh 'docker compose config'
            }
        }

        stage('Build') {
            steps {
                sh 'docker --version'
            }
        }

        stage('Deploy') {
            steps {
                echo 'Deployment Completed'
            }
        }

        stage('Verify') {
            steps {
                sh 'docker ps'
            }
        }
    }

    post {
        success {
            echo 'Deployment Successful'
        }
        failure {
            echo 'Deployment Failed'
        }
    }
}
