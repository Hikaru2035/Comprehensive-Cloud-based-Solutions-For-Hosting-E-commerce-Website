# **Comprehensive Cloud-Based Solutions for Hosting an E-Commerce Website**  

## **Project Overview**  
This project presents a cloud-based solution for hosting an e-commerce website using **Amazon Web Services (AWS)**. It employs a **three-tier architecture** with a **warm standby disaster recovery (DR) strategy** to ensure **high availability, scalability, and minimal latency**.  

## **Key Features**  

- **Three-Tier Architecture:** Separation into **Presentation Layer (Web Tier), Application Layer (App Tier), and Database Layer (DB Tier)** for security and performance.  
- **Scalability:** **AWS Auto Scaling** automatically adjusts resources based on traffic demand.  
- **Load Balancing:** **Application Load Balancer (ALB) & Elastic Load Balancer (ELB)** distribute traffic efficiently.  
- **Disaster Recovery (DR):** Warm standby strategy with a **multi-region database replication setup**.  
- **Global Content Delivery:** **AWS CloudFront** ensures fast content delivery with minimal latency.  
- **Security Measures:** Includes **AWS WAF, security groups, and ACM-managed SSL certificates**.  
- **Cost Efficiency:** AWS **t3.micro EC2 instances**, **Amazon RDS MySQL**, and **AWS Backup** optimize cost vs. performance.  

## **Architecture Diagram**  
![1 AWS Diagram](https://github.com/user-attachments/assets/f9b4a847-dede-4326-b4ed-46d7d877300c)

## **Project Structure**  

```
📁 23080330  
 ┣ 📂 images/          # AWS Architecture Diagrams & Setup Screenshots  
 ┣ 📂 backend/         # Backend services (PHP, API, DB connectors)  
 ┣ 📂 frontend/        # E-commerce frontend (HTML, CSS, JavaScript, PHP)  
 ┣ 📜 README.md        # Project documentation  

## **Setup Instructions**  

### **1. Prerequisites**  
Ensure you have the following installed:  
- **AWS CLI** (For managing AWS resources)  
- **PHP & MySQL** (For local development)  
- **Git** (For version control)  

### **2. Clone the Repository**  
```sh
git clone https://github.com/Hikaru2035/Comprehensive-Cloud-based-Solutions-For-Hosting-E-commerce-Website.git
cd Comprehensive-Cloud-based-Solutions-For-Hosting-E-commerce-Website
```

### **3. Deploying to AWS**  
1. **Set up AWS environment:**  
   - Create a **VPC with subnets**  
   - Configure **EC2 instances, RDS MySQL, ALB, and Auto Scaling**  
   - Set up **CloudFront & Route 53** for global access  

2. **Run the Deployment Script (if available):**  
   ```sh
   ./deploy.sh
   ```

3. **Verify the Deployment:**  
   - Access the website via the assigned **Route 53 domain name**.  
   - Monitor traffic & logs via **AWS CloudWatch**.  

## **Cost Estimate**  
The estimated **monthly cost** for this architecture is **~$150/month**, considering:  
- **EC2 (t3.micro) instances**  
- **RDS MySQL**  
- **CloudFront & Route 53**  
- **AWS Auto Scaling & Load Balancer**  

## **Contributors**  
- **Hikaru2035** (Project Owner)  


---
