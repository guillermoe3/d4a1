


pipeline{
                environment{
                        registry = "guillermoe3/d4a1"
                        registryCredential = "dockerhub"
                        }
                agent any
                stages{
                               stage('Starting'){
                                               steps{
                                               sh 'echo starting...'
                                                                               }
                                                               }
                                stage('Checking Docker'){
                                                steps{
                                                        sh 'sudo docker ps'
                                                         }
                                }
                                stage('Creating image'){
                                                steps{

                                                        script{
                                                                dockerImage=docker.build registry + ":$BUILD_NUMBER"
                                                                }
                                                        }

                }
}
