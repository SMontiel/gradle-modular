allprojects {
	version = "1.4"
	group = 'io.jitpack.gradle-modular'
}

subprojects {
	apply plugin: 'java'
	apply plugin: 'maven-publish'
	
	sourceCompatibility = 1.8 // java 8
	targetCompatibility = 1.8

	java {
		withSourcesJar()
		withJavadocJar()
	}

	publishing {
		publications {
			maven(MavenPublication) {
				groupId project.group
				artifactId project.name
				version project.version
				from components.java
			}
		}
	}
}
