pipeline{
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
							
							sh 'sudo docker build --tag=php54'
							} 				
				} 
                }
}

