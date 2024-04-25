start:
	$(info Run!)
	docker-compose -f docker-compose.yaml up -d --remove-orphans

stop:
	$(info stopping VC)
	docker-compose -f docker-compose.yaml rm -s -f

restart: stop start

copy_docs:
	rm -r ./docs
	cp -r ../vc/docs/apigw ./docs
	rm ./docs/docs.go