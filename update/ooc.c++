#include <iostream>
#include <string>
using namespace std;

	class Advertisement {
		
		
	private:
	    int AdID;
	    string title;
	    string AdType;
	    float PackageID;
	
	public:
	    Advertisement(int id, string T, string type, float pkgId){
	    	
	    	AdID = id;
	    	title = T;
	    	AdType = type;
	    	PackageID = pkgId;
		}


	    void Advertisement::createAd() {
	    }
	
	    void Advertisement::editAd() {
	    }
	
	    void Advertisement::deleteAd() {
	    }
	
	    void Advertisement::publishAd() {
	    }
	    
	
	    int Advertisement::getAdID() const {
	        return AdID;
	    }
	
	    string Advertisement::getTitle() const {
	        return title;
	    }
	
	    string Advertisement::getAdType() const {
	        return AdType;
	    }
	
	    float Advertisement::getPackageID() const {
	        return PackageID;
	    }
	
};

	class Designer {
		
	private:
	    int designerID;
	    string name;
	    string email;
	 
	
	public:
	    Designer(int id, string N, string E){
	    	
	    	designerID = id;
	    	name = N;
	    	email = E
	   	
		}
	
	
	    void addDesigner() {
	    }
	
	    void removeDesigner() {
	    }
	
	    void createAd() {

	    }
	
	    void CheckFeedback() {
	    }
	
	    void UpdateDesign() {
	    }
	
	    int getDesignerID() const {
	        return designerID;
	    }
	
	    string getName() const {
	        return name;
	    }
	
	    string getEmail() const {
	        return email;
	    }
};

int main() {
    Designer designer(1, "Buwaneka", "buwaneka@b.com");
    designer.createAd();
    designer.CheckFeedback();

    return 0;
}
